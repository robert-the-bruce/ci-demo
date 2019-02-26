<?php
/**
 * Created by PhpStorm.
 * User: rsalc
 * Date: 10.02.2019
 * Time: 14:28
 */


if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/../classes/AbstractModel.php';


class JobsModel extends \App\classes\AbstractModel
{
    protected $table = 'jobs';

}