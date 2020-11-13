<?php
require_once COMMON . '/View.php';

class Controller
{
    protected $view;
    public $request;

    public function __construct(Request $request = null)
    {
        $this->view = new View($this);
        $this->request = $request !== null ? $request : new Request();
    }
}
