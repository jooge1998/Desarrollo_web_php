<?php
include_once('database.php');

class Crud extends DATABASE{

    //Nombre de la tabla
    private $table = 'task';


    //Obtiene todos registros de la tabla
    public function getAll(){
        try
        {
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    //Obtiene un registro por Id
    public function getById($id){
        try
        {
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table WHERE id= ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    //Elimina un registro por Id
    public function delete($id){
        try
        {
            $stm = $this->getConnection()->prepare("DELETE FROM $this->table WHERE id=?");
            $stm->execute([$id]);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    // Inserta un nuevo registro en la tabla
    public function create(){
        try{
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table (TITLE, DESCRIPTION) VALUES (?,?)");
            
            $stm->execute([
                $_POST['title'],
                $_POST['description']
            ]);
        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update(){
        try{
            $stm=$this->getConnection()->prepare("UPDATE $this->table SET TITLE= ? ,DESCRIPTION= ? WHERE ID = ?");

            $stm->execute([
                $_POST['title'],
                $_POST['description'],
                $_REQUEST['id']
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}
