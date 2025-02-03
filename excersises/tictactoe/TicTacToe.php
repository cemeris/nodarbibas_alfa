<?php

class TicTacToe {
    private $board;
    private $file = 'game_data.json';

    public function __construct() {
        if (file_exists($this->file)) {
            $this->board = json_decode(file_get_contents($this->file), true);
        } else {
            $this->resetBoard();
        }
    }

    public function resetBoard() {
        $this->board = array_fill(0, 3, array_fill(0, 3, null));
        $this->saveGame();
    }

    public function makeMove($row, $col, $player) {
        if ($this->board[$row][$col] === null) {
            $this->board[$row][$col] = $player;
            $this->saveGame();
            return true;
        }
        return false;
    }

    public function checkWinner() {
        // Check rows, columns, and diagonals
        for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] && $this->board[$i][0] === $this->board[$i][1] && $this->board[$i][1] === $this->board[$i][2]) {
                return $this->board[$i][0];
            }
            if ($this->board[0][$i] && $this->board[0][$i] === $this->board[1][$i] && $this->board[1][$i] === $this->board[2][$i]) {
                return $this->board[0][$i];
            }
        }
        if ($this->board[0][0] && $this->board[0][0] === $this->board[1][1] && $this->board[1][1] === $this->board[2][2]) {
            return $this->board[0][0];
        }
        if ($this->board[0][2] && $this->board[0][2] === $this->board[1][1] && $this->board[1][1] === $this->board[2][0]) {
            return $this->board[0][2];
        }
        return null;
    }

    private function saveGame() {
        file_put_contents($this->file, json_encode($this->board));
    }

    public function getBoard() {
        return $this->board;
    }
}

$game = new TicTacToe();
$game->makeMove(0, 0, 'X');

echo "<pre><code>";
foreach ($game->getBoard() as $row) {
  foreach ($row as $cell) {
    echo "[ " . $cell . " ]";
  }
  echo PHP_EOL;

}
echo "</code></pre>";
