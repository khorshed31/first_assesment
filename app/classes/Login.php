<?php


namespace App\classes;
use App\classes\Info;

class Login extends Register
{
    protected $email;
    protected $password;
    protected $users;

    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function index(){

        header('Location: action.php?pages=login');
    }

    public function verify(){

        $this->users = $this->getAllUser();

        foreach ($this->users as $data){

            if ($data['email'] == $this->email && $data['password'] == $this->password){

                session_start();

                $_SESSION ['id'] = $data['id'];
                $_SESSION ['name'] = $data['name'];
                $_SESSION ['email'] = $data['email'];
                $_SESSION ['password'] = $data['password'];
                $home = new Info();
                $home->index();
            }
        }
        return 'Incorrect Information';
    }

    public function logout(){

        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION ['email']);
        unset($_SESSION ['password']);

        $this->index();
    }
}