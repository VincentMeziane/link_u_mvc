<?php
class TicketsModel extends Model{

    public function getListTickets(){
        try{
        $this->requete = $this->connexion->prepare("SELECT * FROM linku_kontakt WHERE statut!=2");
        $this->requete->execute();
        $list = $this->requete->fetchAll(PDO::FETCH_ASSOC);
        return $list;
        }catch(PDOException $e){
            echo 'Erreur:'. $e->getMessage();
        }
    
    }
    public function updateStatus($id,$statut){  
        try{
            $this->requete = $this->connexion->prepare("UPDATE linku_kontakt SET statut=:statut
                                            WHERE id=:id");
                                            $this->requete->bindParam(':id', $id);
                                            $this->requete->bindParam(':statut', $statut);
                                            $this->requete->execute();
        }catch(PDOException $e){
            echo 'Erreur:'. $e->getMessage();
        }
       }
        
}