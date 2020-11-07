<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Player;

class PlayerController extends Controller
{
  public function index()
  {
      $players = Player::all();

      return response()->json(
        [
            'status' => 'success',
            'data' => $players
        ],
        200);
  }

  public function show($id)
  {
      $player = Player::find($id);

      if ($player === null) {
        $statusMsg = 'Player not found!';
        $statusCode = 404;
      }
      else {
        $player->load('player');
        $statusMsg = 'success';
        $statusCode = 200;
      }

      return response()->json(
        [
            'status' => $statusMsg,
            'data' => $player
        ],
        $statusCode);
  }
}
