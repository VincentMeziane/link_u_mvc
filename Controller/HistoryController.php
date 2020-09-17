<?php
class HistoryController extends Controller
{
	public function getUserAction()
	{
		$userInfos = $this->model->getUser($this->id);
		var_dump($userInfos);
		$role = $this->model->getRole($this->id);
		var_dump($role);
		$this->view->showUser($userInfos,$role,$this->id);
	}
}