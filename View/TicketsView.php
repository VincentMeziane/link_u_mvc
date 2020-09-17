<?php
class TicketsView extends View{
    public function displayList($list, $userList){
		$this->replace('{title}', "Liste des tickets", $this->page);
		$this->searchHTML('tickets');
		$messageList = '';
        foreach ($list as $value) {
            $id= $value['id'];
            $name = $value['name'];
            $surname = $value['firstname'];
            $date = $value['date'];
            $email = $value['email'];
            $tel = $value['tel'];
            $subject = $value['subject'];
            $cat = $value['category'];
            $msg = $value['message'];
			$statut = $value['status']; 
			if($statut == 0)
			{
				$selected = "selected";
			}
			else{
				$selected = '';
			}
            $messageList .= "<tr>";
            $messageList .= "<td>". $name." ".$surname."</td>";
            $messageList .= "<td>". $date. "</td>";
            $messageList .= "<td>". $email. "</td>";
            $messageList .= "<td>". $tel. "</td>";
            $messageList .= "<td>". $subject. "</td>";
            $messageList .= "<td>". $cat. "</td>";
            $messageList .= "<td>". $msg. "</td>";
            $messageList .= "<td>";
			$messageList .= "<form action ='index.php?controller=Tickets&action=update&id=".$id."'>";
			$messageList .= "<select name='statut' id='statut'>";
			$messageList .= "<option value ='0' ".$selected.">En attente de prise en charge</option>";
			$messageList .= "<option value ='1' >En cours de traitement</option>";
			$messageList .= "<option value ='2'>Traitée</option>";
			$messageList .= "</select>";
			$messageList .= "<button>Modifier</button>";
			$messageList .= "<button>Historique</button>";
			$messageList .= "</form>";
			$messageList .= "</td>";
            $messageList .= "</tr>";
        }
        $this->replace('{messageList}', $messageList, $this->page);
        $this->display();
    }
}
