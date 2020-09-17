<?php


class TicketController extends Controller
{

	private $id;

	public function __construct(){
        parent::__construct();
		if(isset($_GET['id']))
		{
			$this->id = $_GET['id'];
		}
	}

	public function testAction()
	{
		$test = RoleController::getUserAction();
		var_dump($test);
	}

}