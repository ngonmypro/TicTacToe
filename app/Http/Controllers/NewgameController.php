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
        $this->win_lines = []; // clear variable first just in case.
        // This is a special nested for loop system, where it does simultaneous win line generation for all three line types.
        for ($a = 0; $a < $this->size; $a++) {
            $horizontal = []; // temporary array
            $vertical   = []; // temporary array
            // Iteration 2
            for ($b = 0; $b < $this->size; $b++) {
                // This will append to the temporary row array the position of the row.
                $horizontal[] = $this->size * $a + $b;
                // This will append to the temporary column array the position of the column
                $vertical[]   = $this->size * $b + $a;
            }
            // Add the generated row to the overall array.
            $this->win_lines['Horizontal']['Row ' . ($a + 1)]  = $horizontal;
            // Add the generated column to the overall array
            $this->win_lines['Vertical']['Column ' . ($a + 1)] = $vertical;
            // This will append to the overall array the position of the diagonals
            $this->win_lines['Diagonal']['backslash'][]        = $this->size * $a + $a;
            // This will append to the overall array the position of the diagonals
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
        // If called from game_check, check board for winning line for token
        $this->winning_line = []; // clear the variable first, just in case.
        // Iterating through all the possible winning lines.
        foreach ($this->win_lines as $line_type => $lines) {
            // Iterating through each line.
            foreach ($lines as $line_name => $line) {
                $this->winning_line[0] = $line; // Preemptively store winning line position
                $check_value           = 0;     // A temporary calculation variable.
                $win_move              = 0;     // The Game Board Cell location.
                // Checking each cell within a line
                foreach ($line as $pos) {
                    // Checks if the token matches what's currently in that game cell.
                    if ($this->TicTacToeArray[$pos] != $token) {
                        // Token does not match checked position.
                        if (debug_backtrace()[1]['function'] == 'game_check') {
                            break;
                        }
                    } else {
                        $check_value++;
                    }
                }
                if (debug_backtrace()[1]['function'] == 'game_check') {
                    // The overall game for winning line.
                    if ($check_value == $this->size) {
                        // It's a winner.
                        return true;
                    }
                }
            }
        }
        // If we have reached this point, then there are no wins for that token.
        $this->winning_line = []; // Clear the winning_line variable.
        if (debug_backtrace()[1]['function'] == 'game_check') {
            // For the game_check function
            return false;
        } else {
            // an unintended function called this...
            return null;
        }
    }
}
