<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Make_bread;

class Testing_breadcrumb extends BaseController
{

	public function index()
	{
		$make_bread = new Make_bread;
                $make_bread->add('first crumb', 'testing', 1);
                $make_bread->add('second crumb', 'the_test', 0);
                $make_bread->add('test','http://google.com');
                $make_bread->output();
                echo $breadcrumb;
		
         //send the breadcrumb to view	
        //return view('welcome_message',$breadcrumb);
	}
}

/* End of file Testing_breadcrumb.php */
/* Location: ./application/controllers/Testing_breadcrumb.php */
