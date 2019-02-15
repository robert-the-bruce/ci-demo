<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 10.02.2019
 * Time: 13:56
 */

/**
 * Class Jobs
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Jobs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jobs_model', '', TRUE);
    }

    public function index()
    {
        $data = array(
            'jobs' => $this->jobs_model->getAll(),
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

            $this->jobs_model->add($data);

            redirect('jobs');
        } else {
            $this->load->view('header');
            $this->load->view('/jobs/add');
            $this->load->view('footer');
        }
    }

    public function delete($id)
    {
        $this->jobs_model->delete($id);
        redirect('jobs');
    }

    public function view($id)
    {
        $data = array(
            'job' => $this->jobs_model->getById($id),
        );
        $this->load->view('header');
        $this->load->view('/jobs/view', $data);
        $this->load->view('footer');
    }
}