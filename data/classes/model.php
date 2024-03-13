<?php

class Model
{
    public function __construct()
    {
        echo "";
    }

    public function getData()
    {
        return "This is some data from the model.";
    }
}

class Option
{
    public $fieldsize;
    public function __construct()
    {
        $this->fieldsize = 3;
    }

    public function saveInput($input)
    {
        if (is_numeric($input) && $input > 0) {
            $this->fieldsize = $input;
        }
    }

    public function getInputArray()
    {
        return $this->fieldsize;
    }
}

class Board {
    public $fieldsize;
    public $positions;
    public function __construct(Option $option)
    {
        $this->fieldsize = $option->getInputArray();
        $this->initializePositions();
    }

    private function initializePositions()
    {
        $this->positions = array();
        for ($i = 0; $i < $this->fieldsize; $i++) {
            for ($j = 0; $j < $this->fieldsize; $j++) {
                $this->positions[$i][$j] = array("x" => $i, "y" => $j);
            }
        }
    }

    public function render()
    {
        $html = '<div class="container">';
        for ($i = 0; $i < $this->fieldsize; $i++) {
            $html .= '<div class="row">';
            for ($j = 0; $j < $this->fieldsize; $j++) {
                $position = $this->positions[$i][$j];
                $html .= '<div class="d-flex m-1 border border-light border-opacity-50" style="height: 30px;
                               width: 30px; background-color: #' . $this->getRandomColor() . '"
                               data-x="' . $position["x"] . '" data-y="' . $position["y"] . '"></div>';
            }
            $html .= '</div>';
        }
        $html .= '</div>';
        return $html;
    }

    private function getRandomColor() {
        $colors = ['FF0000', '0000FF', '008000', 'FFFF00', '8F00FF', 'FFA500' ];
        return $colors[array_rand($colors)];
    }
}

class Controls {
    public function swapFields(Board $board, $x1, $y1, $x2, $y2) {
        $board->swapFields($x1, $y1, $x2, $y2);
    }

}