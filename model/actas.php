<?php
include_once('/xampp/htdocs/desarrollo_web_php/database/database.php');

class Actas extends DATABASE{

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
            $stm = $this->getConnection()->prepare("SELECT * FROM $this->table WHERE N_ACTA= ?");
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
            $stm = $this->getConnection()->prepare("DELETE FROM $this->table WHERE N_ACTA=?");
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
            $stm=$this->getConnection()->prepare("INSERT INTO $this->table (TEMA, CITADA_POR, HORA_INICIO, HORA_FIN,
             FECHA, PRESIDENTE,LUGAR,  ORDEN_DIA) VALUES (?,?,?,?,?,?,?,?)");
            
            $stm->execute([
                $_POST['tema'],
                $_POST['citada'],
                $_POST['hora_inicio'],
                $_POST['hora_fin'],
                $_POST['fecha'],
                $_POST['presidente'],
                $_POST['lugar'],
                $_POST['ordendia']
            ]);
        }catch(PDOException $e){
        echo $e->getMessage();
        }
      }

      // Actualiza un resgistro por Id
      public function update($id){
        try{
            $stm=$this->getConnection()->prepare("UPDATE $this->table SET TEMA = ?, CITADA_POR = ? , HORA_INICIO = ? ,
             HORA_FIN = ? ,FECHA = ?, PRESIDENTE = ? , LUGAR = ? , ORDEN_DIA = ? WHERE N_ACTA = ?");

            $stm->execute([
                $_POST['tema'],
                $_POST['citada_por'],
                $_POST['hora_inicio'],
                $_POST['hora_fin'],
                $_POST['fecha'],
                $_POST['presidente'],
                $_POST['lugar'],
                $_POST['ordendia'],
                $id
        ]);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
      }




}
