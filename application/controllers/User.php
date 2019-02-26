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

    public function login()
    {
        $data = array(
        'users' => $this->usermodel->getAll()
        );
        $this->load->view('header');
        $this->load->view('user/login', $data);
        $this->load->view('footer');
    }
}