<?php
include_once('database.php');

class Crud extends DATABASE{

    //Nombre de la tabla
    private $table = 'actas';

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
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table (TEMA, CITADA_POR, HORA_INICIO, HORA_FIN, FECHA, PRESIDENTE, PARTICIPANTES, ORDEN_DIA) VALUES (?,?,?,?,?,?,?,?)");
            
            $stm->execute([
                $_POST['tema'],
                $_POST['citada'],
                $_POST['hora_inicio'],
                $_POST['hora_fin'],
                $_POST['fecha'],
                $_POST['presidente'],
                $_POST['participantes'],
                $_POST['orden_dia'],
            ]);
        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update(){
        try{
            $stm=$this->getConnection()->prepare("UPDATE $this->table SET NOMBRE = ?, CARGO = ? , CONTACTO = ? , COMPROMISO = ? , RESPONSABILIDADES = ?  WHERE ID = ?");

            $stm->execute([
                $_POST['tema'],
                $_POST['citada'],
                $_POST['hora_inicio'],
                $_POST['hora_fin'],
                $_POST['fecha'],
                $_POST['presidente'],
                $_POST['participantes'],
                $_POST['orden_dia'],
                $_REQUEST['id']
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}
