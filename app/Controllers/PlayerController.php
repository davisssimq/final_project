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
        $config = config('Game');
        return view('players/index', [
            'hraci' => $this->playerModel->paginate($config->pagination),
            'strankovani' => $this->playerModel->pager
        ]);
    }

    public function game($playerId, $gameId)
{
    $db = \Config\Database::connect();

    $data['hra'] = $this->gameModel
        ->where('id_game', $gameId)
        ->first();

    $data['hrac'] = $this->playerModel
        ->where('id_player', $playerId)
        ->first();

    return view('players/game_detail', $data);
}

    public function games($id)
    {
        $config = config('Game');
        $db = \Config\Database::connect();

        $data['hrac'] = $db->table('player')
            ->select('id_player, nickname')
            ->where('id_player', $id)
            ->get()
            ->getRowArray();


            
        $data['hry'] = $this->gameModel
            ->select('game.*')
            ->join('game_player', 'game_player.game_id = game.id_game')
            ->where('game_player.player_id', $id)
            ->paginate($config->pagination);

        $data['strankovani'] = $this->gameModel->pager;
        $data['achievementy'] = $this->achievementModel->findAll();

        return view('players/games', $data);
    }
}