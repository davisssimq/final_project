<?php
namespace App\Controllers;

use App\Models\GameModel;
use App\Models\Game_genreModel;
use App\Models\Operating_systemModel;
use App\Models\Game_genre_gameModel;
use IonAuth\Libraries\IonAuth;

class GameController extends BaseController
{
    protected $gameModel;
    protected $game_genreModel;
    protected $operating_systemModel;
    protected $game_genre_gameModel;
    protected $ionAuth;

    public function __construct()
    {
        $this->gameModel = new GameModel();
        $this->game_genreModel = new Game_genreModel();
        $this->operating_systemModel = new Operating_systemModel();
        $this->game_genre_gameModel = new Game_genre_gameModel();
        $this->ionAuth = new IonAuth();
    }

    public function index()
    {
        $config = config('Game');
        $games = $this->gameModel
    ->select('game.*, GROUP_CONCAT(game_genre.name SEPARATOR ", ") AS genre_name')
    ->join('game_genre_game', 'game_genre_game.game_id_game = game.id_game', 'left')
    ->join('game_genre', 'game_genre.id_game_genre = game_genre_game.game_genre_id_game_genre', 'left')
    ->groupBy('game.id_game')
    ->orderBy('game.name', 'ASC')
    ->paginate($config->pagination);

        return view('games/index', [
            'title' => 'Hry',
            'games' => $games,
            'pager' => $this->gameModel->pager
        ]);
    }

    public function create()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to(site_url('login'))->with('error', 'Nejdřív se musíš přihlásit jako admin.'); }
        $data['zanryHer'] = $this->game_genreModel->findAll();
        $data['operacniSystemy'] = $this->operating_systemModel->findAll();
        return view('games/create', $data);
    }

    public function store()
    {
        if (!$this->ionAuth->loggedIn()) {
    return redirect()->to(site_url('login'))->with('error', 'Nejdřív se musíš přihlásit jako admin.');
}
        $image = $this->request->getFile('image');
        $imageName = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads', $imageName);
        }

        $this->gameModel->save([
            'name' => $this->request->getPost('name'),
            'developer_id' => 1, //zde nastavit, aby 'developer_id' byl závislý na vývojáři, který vytváří konkrétní hru
            'release_date' => $this->request->getPost('release_date'),
            'image' => $imageName,
            'description' => $this->request->getPost('description'),
            'storage_space' => $this->request->getPost('storage_space')
        ]);

        $newId_game = $this->gameModel->insertID();

        $gameGenres = $this->request->getPost('gameGenres');
        foreach ($gameGenres as $gameGenre)
            {
                $this->game_genre_gameModel->insert([
                    'game_genre_id_game_genre' => $gameGenre,
                    'game_id_game' => $newId_game
                ]);
            }

        

        return redirect()->to('/games')->with('success', 'Game was updated.');
    }

    public function edit($id)
    {
        if (!$this->ionAuth->loggedIn()) {
    return redirect()->to(site_url('login'))->with('error', 'Nejdřív se musíš přihlásit jako admin.');
}
        return view('games/edit', [
            'title' => 'Úprava hry',
            'game' => $this->gameModel->find($id),
            'genres' => $this->game_genreModel->findAll()
        ]);
    }

    public function update($id)
    {
        if (!$this->ionAuth->loggedIn()) {
    return redirect()->to(site_url('login'))->with('error', 'Nejdřív se musíš přihlásit jako admin.');
}
        $game = $this->gameModel->find($id);
        $image = $this->request->getFile('image');
        $imageName = $game['image'];

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads', $imageName);
        }

        $this->gameModel->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'release_date' => $this->request->getPost('release_date'),
            'image' => $imageName
        ]);

        return redirect()->to('/games')->with('success', 'Game was updated.');
    }

    public function delete($id)
    {
        if (!$this->ionAuth->loggedIn()) {
    return redirect()->to(site_url('login'))->with('error', 'Nejdřív se musíš přihlásit jako admin.');
}
        $this->gameModel->delete($id);
        return redirect()->to('/games')->with('success', 'Game was deleted.');
    }
}