<?php
include_once('/xampp/htdocs/desarrollo_web_php/database/database.php');

class Participantes extends DATABASE{

    //Nombre de la tabla
    private $table = 'usuario';

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
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table WHERE USUARIO_ID = ?");
            $stm->execute([$id]);
            return $stm->fetchAll(PDO::FETCH_OBJ);
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
            $stm = $this->getConnection()->prepare("DELETE FROM $this->table WHERE USUARIO_ID =?");
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
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table 
            (NOMBRE, CARGO, CONTACTO) VALUES (?,?,?)");
            
            $stm->execute([
                $_POST['nombre'],
                $_POST['cargo'],
                $_POST['contacto']
            ]);
        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update($id){
        try{
            $stm=$this->getConnection()->prepare("UPDATE $this->table SET NOMBRE = ?,
             CARGO = ? , CONTACTO = ?  WHERE USUARIO_ID = ?");

            $stm->execute([
                $_POST['nombre'],
                $_POST['cargo'],
                $_POST['contacto'],
                $id
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}
