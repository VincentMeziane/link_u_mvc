<?php
include 'Model/TicketsModel.php';
include 'View/TicketsView.php';
class TicketsController extends Controller{
    public function __construct(){
        $this->model = new TicketsModel();
        $this->view = new TicketsView();
    }
    public function listAction(){
        $ticketsList = $this->model->getListTickets();
        // Liste des users pour le select
        $userList = $this->model->getUsers();
        $this->view->displayList($ticketsList,$userList);

    }
}