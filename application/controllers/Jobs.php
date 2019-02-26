<?php

/**
 * Class Jobs
 *
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');


class Jobs extends \CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jobsmodel', '', TRUE);
    }

    public function index()
    {
        $data = array(
            'jobs' => $this->jobsmodel->getAll(),
        );
        $this->load->view('header');
        $this->load->view('/jobs/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        $post = $this->input->post(NULL, TRUE);

        if ($post) {
            $data = array(
                'title' => $post['title'],
                'company' => $post['company'],
                'description' => $post['description'],
            );

            $this->jobsmodel->add($data);

            redirect('jobs');
        } else {
            $this->load->view('header');
            $this->load->view('/jobs/add');
            $this->load->view('footer');
        }
    }

    public function update($id)
    {
        $data = array(
            'job' => $this->jobsmodel->getById($id),
        );

        $post = $this->input->post(NULL, TRUE);

        if ($post) {
            $data = array(
                'title' => $post['title'],
                'company' => $post['company'],
                'description' => $post['description'],
            );

            $this->jobsmodel->update($data, $id);

            redirect('jobs');
        } else {
            $this->load->view('header');
            $this->load->view('/jobs/update', $data);
            $this->load->view('footer');
        }
    }

    public function delete($id)
    {
        $this->jobsmodel->delete($id);
        redirect('jobs');
    }

    public function view($id)
    {
        $data = array(
            'job' => $this->jobsmodel->getById($id),
        );
        $this->load->view('header');
        $this->load->view('/jobs/view', $data);
        $this->load->view('footer');
    }
}