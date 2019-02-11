<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 10.02.2019
 * Time: 14:28
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');


class Jobs_model extends CI_Model
{

    protected $table = 'jobs';

    // returns all job offers
    public function getAll()
    {
        $result = $this->db->get($this->table)->result_object();
        return $result;
    }

    // looks for job offer by id
    public function getById($id)
    {
        $this->db->select('*')
            ->from($this->table)
            ->where('id', (int)$id);

        $result = $this->db->get()->row_object();

        return $result;
    }

    // add job offer
    public function add(array $data)
    {
        return $this->db->insert($this->table, $data);
    }

    // deletes job offer
    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => (int)$id));
    }
}