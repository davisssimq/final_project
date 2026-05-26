<?php

namespace App\Controllers;

use App\Models\DeveloperModel;
use App\Models\GameModel;
use App\Models\AchievementModel;

class DeveloperController extends BaseController
{
    protected $developerModel;
    protected $gameModel;
    protected $achievementModel;

    public function __construct()
    {
        $this->developerModel = new DeveloperModel();
        $this->gameModel = new GameModel();
        $this->achievementModel = new AchievementModel();
    }
    public function index()
    {
        $data['vyvojari'] = $this->developerModel->findAll();
        return view('developers/index', $data);
    }
    public function games($id)
    {
        $data['vyvojari'] = $this->developerModel->find($id);
        $data['hry'] = $this->gameModel->where('developer_id', $id)
        ->paginate(9);
        $data['strankovani'] = $this->gameModel->pager;
        $data['achievementy'] = $this->achievementModel->findAll();
        return view('developers/games', $data);
    }
}
