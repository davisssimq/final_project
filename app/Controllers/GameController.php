<?php
namespace App\Controllers;

use App\Models\GameModel;
use App\Models\Game_genreModel;

class GameController extends BaseController
{
    protected $gameModel;
    protected $game_genreModel;

    public function __construct()
    {
        $this->gameModel = new GameModel();
        $this->game_genreModel = new Game_genreModel();
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
        return view('games/create', [
            'title' => 'Přidání hry',
            'genres' => $this->game_genreModel->findAll()
        ]);
    }

    public function store()
    {
        $image = $this->request->getFile('image');
        $imageName = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads', $imageName);
        }

        $this->gameModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'release_date' => $this->request->getPost('release_date'),
            'developer_id' => 1,
            'image' => $imageName
        ]);

        return redirect()->to('/games')->with('success', 'Game was updated.');
    }

    public function edit($id)
    {
        return view('games/edit', [
            'title' => 'Úprava hry',
            'game' => $this->gameModel->find($id),
            'genres' => $this->game_genreModel->findAll()
        ]);
    }

    public function update($id)
    {
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
        $this->gameModel->delete($id);
        return redirect()->to('/games')->with('success', 'Game was deleted.');
    }
}