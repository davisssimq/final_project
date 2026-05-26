<?php

namespace App\Controllers;

use App\Models\Game_genreModel;
use App\Models\GameModel;
use App\Models\AchievementModel;

class Game_genreController extends BaseController
{
    protected $game_genreModel;
    protected $gameModel;
    protected $achievementModel;

    public function __construct()
    {
        $this->game_genreModel = new Game_genreModel();
        $this->gameModel = new GameModel();
        $this->achievementModel = new AchievementModel();
    }
    public function index()
    {
        $data['zanryHer'] = $this->game_genreModel->findAll();
        return view('game genres/index', $data);
    }
    public function games($id)
    {
        $databaze = \Config\Database::connect();
        $zanryHer = $databaze->table('game_genre');
        $data['zanrHry'] = $zanryHer->select('name')
        ->where('id_game_genre', $id)
        ->get()
        ->getRowArray();
        $data['hry'] = $this->gameModel->select('game.*')
        ->join('game_genre_game', 'game_genre_game.game_id_game = game.id_game')
        ->where('game_genre_game.game_genre_id_game_genre', $id)
        ->paginate(9);
        $data['strankovani'] = $this->gameModel->pager;
        $data['achievementy'] = $this->achievementModel->findAll();
        return view('game genres/games', $data);
    }
}
