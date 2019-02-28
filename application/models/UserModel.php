<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 26.02.2019
 * Time: 20:08
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/../classes/AbstractModel.php';

class UserModel extends \App\classes\AbstractModel
{
    protected $table = 'user';


    public function findByUsername($username)
    {
        $this->db->select('*')
            ->from($this->table)
            ->where('name', $username);

        $result = $this->db->get()->row_object();

        return $result;
    }
}