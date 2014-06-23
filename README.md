ci-eloquent
===========

Codeigniter 2.2.0 Integrated with Illuminate database eloquent from laravel 4.2.*




Installation
=============
composer install



Use On Models
=============

class name_of_class extends ORM
{
	protected $table = "table_name";
	
	function __construct() 
    {
        parent::__construct();
    }
	
}




Use On Controllers
==================

class name_of_class extends CI_Controller
{
	function __construct() 
    {
        parent::__construct();
		
		$this->load->model('model_name');
    }
	
}