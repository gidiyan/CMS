<?php

class Controller
{
    public $request;
    public $redirector;
    protected $view;

    public function __construct(Request $request = null)
    {
        $this->view = new View($this);
        $this->request = $request !== null ? $request : new Request();
        $this->redirector = new Redirector();
    }
}
