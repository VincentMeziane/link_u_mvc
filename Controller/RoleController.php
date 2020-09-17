<?php
include 'Model/RoleModel.php';
include 'View/RoleView.php';
class RoleController extends Controller
{
	private $id;

	public function __construct(){
        parent::__construct();
        $this->view = new RoleView;
		$this->model = new RoleModel;
		if(isset($_GET['id']))
		{
			$this->id = $_GET['id'];
		}
	}
	
	// Récupérer tous les user
	public function listAction()
	{
		$allUsers = $this->model->getUsers();
		var_dump($allUsers);
		$this->view->listUsers();
	}

	// Récupérer un user en fonction de l'id
	public function getUserAction()
	{
		$userInfos = $this->model->getUser($this->id);
		var_dump($userInfos);
		$role = $this->model->getRole($this->id);
		var_dump($role);
		$this->view->showUser($userInfos,$role,$this->id);
	}
}