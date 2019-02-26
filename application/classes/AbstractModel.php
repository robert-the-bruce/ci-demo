<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 26.02.2019
 * Time: 20:14
 */

namespace App\classes;

abstract class AbstractModel extends \CI_Model
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        $result = $this->db->get($this->table)->result_object();
        return $result;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        $this->db->select('*')
            ->from($this->table)
            ->where('id', (int)$id);

        $result = $this->db->get()->row_object();

        return $result;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function add(array $data)
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * @param $data
     * @param $id
     */
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);

    }


    /**
     * @param $id
     */
    public function delete($id)
    {
        $this->db->delete($this->table, array('id' => (int)$id));
    }
}