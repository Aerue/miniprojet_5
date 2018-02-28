<?php

    namespace Src\Controller;


    /**
     * Class LoginController
     *
     * @package Src\Controller
     */
    class LoginController extends Controller
    {

        public function __construct()
        {
            parent::__construct();
            if (isset($_POST)) {
                $this->connect();
            }
        }

        public function connect()
        {
            if (
                isset($_POST['login']) &&
                isset($_POST['password']) &&
                $_POST['login'] === "1"
                && $_POST['password'] === "1"
            ) {
                $_SESSION['is_connected'] = true;
                $_SESSION['login'] = 'Alexandre';

                header("Location: /?page=logout");
            }
        }

    }









