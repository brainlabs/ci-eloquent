<?php

/**
 * Integrated Codeigniter With Illuminate Database  
 * 
 * @Created on : 22 June 2014
 * @author DAUD D. SIMBOLON <daud.simbolon@gmail.com>
 * 
 */


/* Load Capsule manager */

use Illuminate\Database\Capsule\Manager as Capsule;  
 
$capsule = new Capsule;

$ci= &get_instance();
$ci->load->database();



/*
$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'yos',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
));
 * 
 */

/**
 * Set Config database illuminate/database
 */

$capsule->addConnection(array(
    'driver'    => $ci->db->dbdriver,
    'host'      => $ci->db->hostname,
    'database'  => $ci->db->database,
    'username'  => $ci->db->username,
    'password'  => $ci->db->password,
    'charset'   => $ci->db->char_set,
    'collation' => $ci->db->dbcollat,
    'prefix'    => $ci->db->dbprefix,
));


$capsule->bootEloquent();




/* Load Model eloquent */
use Illuminate\Database\Eloquent\Model as eloquent;

class ORM extends eloquent
{
    function __construct() 
    {
        parent::__construct();
    }
}