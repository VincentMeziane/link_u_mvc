<?php

class RoleModel extends Model
{
	public function getUsers()
	{
		try {
            $this->request = $this->connection->prepare("SELECT * FROM `linku_usermeta` WHERE `meta_key`= 'nickname'");
            $result = $this->request->execute();

            if($result){
                return $result = $this->request->fetchAll();
            }
           
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
	}

	public function getUser($id)
	{
		try {
			$this->request = $this->connection->prepare("SELECT meta_value FROM `linku_usermeta` WHERE `user_id`= :id AND`meta_key`= 'nickname'");
			$this->request->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $this->request->execute();

            if($result){
                return $result = $this->request->fetch();
            }
           
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
	}

	public function getRole($id)
	{
		try {
			$this->request = $this->connection->prepare("SELECT meta_value FROM `linku_usermeta` WHERE `user_id`= :id AND`meta_key`= 'linku_user_level'");
			$this->request->bindParam(":id", $id, PDO::PARAM_INT);
            $result = $this->request->execute();

            if($result){
                return $result = $this->request->fetch();
            }
           
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
	}

}