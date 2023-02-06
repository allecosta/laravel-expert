<?php

class UserController extends Controller 
{
    /**
     * Especificando o middleware no construtor do controlador UserController, utilizando o método middleware().
     *
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('log')->only('index');
        $this->middleware('subscribed')->except('store');

    }
}