ci-eloquent
===========

Codeigniter 2.2.0 Integrated with Illuminate database eloquent from laravel 4.2.*




Installation
=============
run command :
<pre class="brush: bash">
composer install
</pre>


Use On Models
=============
<pre class="brush: php">
class name_of_class extends ORM
{
    protected $table = "table_name";
	
    function __construct()
	{
        parent::__construct();
    }
	
}
</pre>




Use On Controllers
==================
<pre class="brush: php">
class name_of_class extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
		$this->load->model('model_name');
    }
	
}
</pre>


================
Contact Me :
Facebook : https://www.facebook.com/linuxfree
Email : daud.simbolon@gmail.com


