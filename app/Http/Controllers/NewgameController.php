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
      $this->size = $request->size;
      $TicTacToe = $request->TicTacToe;
      $this->TicTacToeArray = str_split($request->TicTacToe);
      $data = $request->data;
        $this->generate_win_lines();
        echo $this->game_check($TicTacToe, $data);
    }

    function generate_win_lines(){
        $this->win_lines = [];
        for ($a = 0; $a < $this->size; $a++) {
            $horizontal = [];
            $vertical   = [];
            for ($b = 0; $b < $this->size; $b++) {
                $horizontal[] = $this->size * $a + $b;
                $vertical[]   = $this->size * $b + $a;
            }
            $this->win_lines['Horizontal']['Row ' . ($a + 1)]  = $horizontal;
            $this->win_lines['Vertical']['Column ' . ($a + 1)] = $vertical;
            $this->win_lines['Diagonal']['backslash'][]        = $this->size * $a + $a;
            $this->win_lines['Diagonal']['forward slash'][]    = $this->size * ($a + 1) - ($a + 1);
        }
    }

    function game_check($TicTacToe, $data) {
        if ($this->win_check('X')) {
          return "X Win!";
        } else if ($this->win_check('O')) {
          return "O Win!";
        } else if (stristr($TicTacToe, '-') === FALSE) {
          return "X & O Draw!";
        }else {
          if ($data == 'X') {
            return "O";
          }else {
            return "X";
          }
        }
    }

    function win_check($token) {
        $this->winning_line = []; 
        foreach ($this->win_lines as $line_type => $lines) {
            foreach ($lines as $line_name => $line) {
                $this->winning_line[0] = $line;
                $check_value = 0;
                foreach ($line as $pos) {
                    if ($this->TicTacToeArray[$pos] != $token) {
                        if (debug_backtrace()[1]['function'] == 'game_check') {
                            break;
                        }
                    } else {
                        $check_value++;
                    }
                }
                if (debug_backtrace()[1]['function'] == 'game_check') {
                    if ($check_value == $this->size) {
                        return true;
                    }
                }
            }
        }

        $this->winning_line = [];
        if (debug_backtrace()[1]['function'] == 'game_check') {
            return false;
        } else {
            return null;
        }
    }
}
