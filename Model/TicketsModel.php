<?php
class TicketsModel extends Model
{
    public function getListTickets()
    {
        try {
            $this->requete = $this->connection->prepare("SELECT * FROM linku_kontakt WHERE 'status'!=2");
            $this->requete->execute();
            $list = $this->requete->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }
    public function updateStatut($id, $statut)
    {
        try {
            $this->requete = $this->connection->prepare("UPDATE linku_kontakt SET statut=:statut
                                            WHERE id=:id");
            $this->requete->bindParam(':id', $id);
            $this->requete->bindParam(':statut', $statut);
            $this->requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function getUsers()
    {
        try {
            $this->request = $this->connection->prepare("SELECT * FROM `linku_usermeta` WHERE `meta_key`= 'nickname'");
            $result = $this->request->execute();

            if ($result) {
                return $result = $this->request->fetchAll();
            }
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }
}
