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
        $this->load->library('layout');
    }

    public function index()
    {
        $data = array(
            'jobs' => $this->jobs_model->getAll(),
        );
        $this->load->library('layout')->view('/jobs/index', $data);
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
            $this->load->library('layout')->view('/jobs/add');
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

        $this->load->library('layout')->view('/jobs/view', $data);
    }
}