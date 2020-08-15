<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewgameController extends Controller
{
    function index()
    {
      return view('newgame.index');
    }

    function sizetable(Request $request)
    {
      $size = $request->size;
      return view('newgame.game', compact('size'));
    }

    function process(Request $request)
    {
      $size = $request->size;
      $TicTacToe = explode(',',$request->TicTacToe);
      $data = $request->data;
      $idTicTacToe = $request->idTicTacToe;

      dd($TicTacToe[0]);
    }
}
