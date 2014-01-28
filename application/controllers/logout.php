<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends Plain_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->redirectIfLoggedOut();
    }

    public function index()
    {
        $this->sessionClear();
        header('Location: /');
        exit;
    }
}