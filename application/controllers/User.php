<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 26.02.2019
 * Time: 19:54
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel', '', TRUE);
    }

    public function index()
    {
        $data = array(
            'users' => $this->usermodel->getAll(),
        );
        $this->load->view('header');
        $this->load->view('/user/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $post = $this->input->post(NULL, TRUE);

        if ($post) {
            $data = array(
                'name' => $post['name'],
                'password' => $post['password'],
            );

            $this->usermodel->add($data);

            redirect('user');
        } else {
            $this->load->view('header');
            $this->load->view('/user/add');
            $this->load->view('footer');
        }
    }

    public function update($id)
    {
        $data = array(
            'user' => $this->usermodel->getById($id),
        );

        $post = $this->input->post(NULL, TRUE);

        if ($post) {
            $data = array(
                'name' => $post['name'],
                'password' => $post['password'],
            );

            $this->usermodel->update($data, $id);

            redirect('user');
        } else {
            $this->load->view('header');
            $this->load->view('/user/update', $data);
            $this->load->view('footer');
        }
    }

    public function view($id)
    {
        $data = array(
            'user' => $this->usermodel->getById($id),
        );
        $this->load->view('header');
        $this->load->view('/user/view', $data);
        $this->load->view('footer');
    }
    public function delete($id)
    {
        $this->usermodel->delete($id);
        redirect('user');
    }

    public function adduser()
    {
        $data = array(
        'users' => $this->usermodel->getAll()
        );
        $this->load->view('header');
        $this->load->view('user/add', $data);
        $this->load->view('footer');
    }

    public function login()
    {
        $error = false;
        if (!empty($_POST['username']) AND !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($this->attempt($username, $password)) {
                $this->load->view('user/dashboard');
                return;
            } else {
                $error = true;
            }
        }
        $this->load->view('header');
        $this->load->view("user/login", $error);
        $this->load->view('footer');
    }


    public function check()
    {
        if (isset($_SESSION['login'])) {
            return true;
        } else {
            header("Location: login");
            die();
        }
    }

    public function attempt($username, $password)
    {
        $user = $this->usermodel->findByUsername($username);
        if (empty($user)) {
            return false;
        }

        if (password_verify($password, $user->password)) {
            $_SESSION['login'] = $user->name;
            session_regenerate_id(true);
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        session_regenerate_id(true);
    }

    public function dashboard()
    {
        $this->check();
        $this->load->view("user/dashboard");
    }
}