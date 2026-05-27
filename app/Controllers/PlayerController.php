<?php

namespace App\Controllers;

use App\Models\PlayerModel;
use App\Models\GameModel;
use App\Models\AchievementModel;

class PlayerController extends BaseController
{
    protected $playerModel;
    protected $gameModel;
    protected $achievementModel;

    public function __construct()
    {
        $this->playerModel = new PlayerModel();
        $this->gameModel = new GameModel();
        $this->achievementModel = new AchievementModel();
    }
    public function index()
    {
        $data['hraci'] = $this->playerModel->paginate(9);
        $data['strankovani'] = $this->playerModel->pager;
        return view('players/index', $data);
    }
    public function games($id)
    {
        $databaze = \Config\Database::connect();
        $hraci = $databaze->table('player');
        $data['hrac'] = $hraci->select('nickname')
        ->where('id_player', $id)
        ->get()
        ->getRowArray();
        $data['hry'] = $this->gameModel->select('game.*')
        ->join('game_player', 'game_player.game_id_game = game.id_game')
        ->where('game_player.player_id_player', $id)
        ->paginate(9);
        $data['strankovani'] = $this->gameModel->pager;
        $data['achievementy'] = $this->achievementModel->findAll();
        return view('players/games', $data);
    }
}
