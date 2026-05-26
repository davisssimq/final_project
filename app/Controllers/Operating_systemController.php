<?php

namespace App\Controllers;

use App\Models\Operating_systemModel;
use App\Models\GameModel;
use App\Models\AchievementModel;

class Operating_systemController extends BaseController
{
    protected $operating_systemModel;
    protected $gameModel;
    protected $achievementModel;

    public function __construct()
    {
        $this->operating_systemModel = new Operating_systemModel();
        $this->gameModel = new GameModel();
        $this->achievementModel = new AchievementModel();
    }
    public function index()
    {
        $data['operacniSystemy'] = $this->operating_systemModel->findAll();
        return view('operating systems/index', $data);
    }
    public function games($id)
    {
        $databaze = \Config\Database::connect();
        $operacniSystemy = $databaze->table('operating_system');
        $data['operacniSystem'] = $operacniSystemy->select('name')
        ->where('id_operating_system', $id)
        ->get()
        ->getRowArray();
        $data['hry'] = $this->gameModel->select('game.*')
        ->join('operating_system_game', 'operating_system_game.game_id = game.id_game')
        ->where('operating_system_game.operating_system_id', $id)
        ->paginate(9);
        $data['strankovani'] = $this->gameModel->pager;
        $data['achievementy'] = $this->achievementModel->findAll();
        return view('operating systems/games', $data);
    }
}
