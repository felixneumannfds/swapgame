<?php
class Controller {

    private $model;
    public $board;
    private $option;
    private $controls;

    public function __construct($model) {
        $this->model = $model;
        $this->option = new Option();
        $this->controls = new Controls();
    }

    public function index() {
        $data = $this->model->getData();
        if (isset($_POST['savefieldsize'])) {
            $this->option->saveInput($_POST['fieldsize']);
            $fieldsize = $this->option->getInputArray();
            print_r('Feldgröße: ' . $fieldsize);
            $this->board = new Board($this->option);
        } else {
            $this->board = new Board($this->option);
        }
        include 'view.php';
        $view_data = compact('controller');
        extract($view_data);
    }

    public function swapFields() {
        $x1 = $_POST['field1_x'];
        $y1 = $_POST['field1_y'];
        $x2 = $_POST['field2_x'];
        $y2 = $_POST['field2_y'];
        $this->controls->swapFields($this->board, $x1, $y1, $x2, $y2);
    }
}