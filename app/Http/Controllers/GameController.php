<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function index()
    {
      return view('game.index');
    }

    function process(Request $request)
    {
        $TicTacToe1 = $request->TicTacToe1;
        $TicTacToe2 = $request->TicTacToe2;
        $TicTacToe3 = $request->TicTacToe3;
        $TicTacToe4 = $request->TicTacToe4;
        $TicTacToe5 = $request->TicTacToe5;
        $TicTacToe6 = $request->TicTacToe6;
        $TicTacToe7 = $request->TicTacToe7;
        $TicTacToe8 = $request->TicTacToe8;
        $TicTacToe9 = $request->TicTacToe9;
        $data = $request->data;

      if ($data == "X") {
        if (($TicTacToe1 == "X" && $TicTacToe2 == "X" && $TicTacToe3 == "X") || ($TicTacToe4 == "X" && $TicTacToe5 == "X" && $TicTacToe6 == "X") ||
            ($TicTacToe7 == "X" && $TicTacToe8 == "X" && $TicTacToe9 == "X") || ($TicTacToe1 == "X" && $TicTacToe4 == "X" && $TicTacToe7 == "X") ||
            ($TicTacToe2 == "X" && $TicTacToe5 == "X" && $TicTacToe8 == "X") || ($TicTacToe3 == "X" && $TicTacToe6 == "X" && $TicTacToe9 == "X") ||
            ($TicTacToe1 == "X" && $TicTacToe5 == "X" && $TicTacToe9 == "X") || ($TicTacToe3 == "X" && $TicTacToe5 == "X" && $TicTacToe7 == "X"))
        {
          echo "X Win!";
        }else {
          if ($TicTacToe1 != "" && $TicTacToe2 != "" && $TicTacToe3 != "" && $TicTacToe4 != "" && $TicTacToe5 != "" && $TicTacToe6 != "" && $TicTacToe7 != "" && $TicTacToe8 != "" && $TicTacToe9 != "") {
            echo "X & O Draw!";
          }else {
            echo "O";
          }

        }

      }else {
        if (($TicTacToe1 == "O" && $TicTacToe2 == "O" && $TicTacToe3 == "O") || ($TicTacToe4 == "O" && $TicTacToe5 == "O" && $TicTacToe6 == "O") ||
            ($TicTacToe7 == "O" && $TicTacToe8 == "O" && $TicTacToe9 == "O") || ($TicTacToe1 == "O" && $TicTacToe4 == "O" && $TicTacToe7 == "O") ||
            ($TicTacToe2 == "O" && $TicTacToe5 == "O" && $TicTacToe8 == "O") || ($TicTacToe3 == "O" && $TicTacToe6 == "O" && $TicTacToe9 == "O") ||
            ($TicTacToe1 == "O" && $TicTacToe5 == "O" && $TicTacToe9 == "O") || ($TicTacToe3 == "O" && $TicTacToe5 == "O" && $TicTacToe7 == "O"))
        {
          echo "O Win!";
        }else {
          echo "X";
        }
      }

    }
}

// 1-2-3
// 4-5-6
// 7-8-9
// 1-4-7
// 2-5-8
// 3-6-9
// 1-5-9
// 3-5-7
