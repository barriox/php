<?php

class Database
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new mysqli(HOST,USER,PASS,BD);
        if($this->conexion->connect_errno!=0){
            die("Error conectando").$this->conexion->connect_errno;
        }
    }
    public function insert(string $nombre, string $pass):string{
        if($stmt = $this->conexion->prepare("INSERT INTO usuarios (nombre, pasword) VALUES (?, ?)")) {
            $stmt->bind_param('ss',$nombre, $pass);
            $stmt->execute();
            $stmt->close();
            return "<p style='color:green;'>Se ha insertado correctamente el usuario</p>";
        }
        return "<p style='color:red;'>No se ha podido insertar. $this->conexion->error</p>";

    }
    public function select(){
        if ($resultado = $this->conexion->query("SELECT * FROM usuarios")) {
            while ( $fila = $resultado->fetch_assoc() ) {
                $msj.= "Nombre: ".$fila['nombre']." pass: ".$fila['pasword']."<button type='submit' name='update' value='".$fila['id']."'>Actualizar</button><button type='submit' name='delete' value='".$fila['id']."'>Eliminar</button><br>";
            }
            return $msj;
        }
        return "<p style='color:red;'>No se ha ejecutado. ".$this->conexion->error."</p>";
    }
    public function edit($id){
        if ($resultado = $this->conexion->query("SELECT * FROM usuarios")) {
            while ( $fila = $resultado->fetch_assoc() ) {
                if($id==$fila['id']){
                    $msj.= "Nombre: <input type='text' name='newuser' value='".$fila['nombre']."'><input type='text' name='newpass' value='".$fila['pasword']."'><button type='submit' name='set_update' value='".$fila['id']."'>Actualizar</button><br>";
                }else{
                    $msj.= "Nombre: ".$fila['nombre']." pass: ".$fila['pasword']."<button type='submit' name='update' value='".$fila['id']."--->".$fila['nombre']."--->".$fila['pasword']."'>Actualizar</button><button type='submit' name='delete' value='".$fila['id']."'>Eliminar</button><br>";
                }
            }
            return $msj;
        }
            return "<p style='color:red;'>No se ha ejecutado. ".$this->conexion->error."</p>";
    }
    public function update(int $id, string $nombre, string $newpassword):string{
        if($stmt = $this->conexion->prepare("UPDATE usuarios SET nombre= ?, pasword = ? WHERE id = ?")){
            $stmt->bind_param('ssi',$nombre,$newpassword, $id);
            $stmt->execute();
            $stmt->close();
            return "<p style='color:green;'>Se ha actualizado correctamente el registro</p>";
        }
        return "<p style='color:red;'>No se ha actualizado correctamente. ".$this->conexion->error."</p>";
    }
    public function delete(int $id):string{
        if($stmt = $this->conexion->prepare("DELETE FROM usuarios WHERE id=?")) {
            $stmt->bind_param('i',$id);
            $stmt->execute();
            $plural1 = $this->conexion->affected_rows > 1 ? "n" : "";
            $plural2=$this->conexion->affected_rows > 1 ? "s" : "";
            $stmt->close();
            return "<p style='color:green;'>Se ha".$plural1." eliminado correctamente " . $this->conexion->affected_rows . " registro" . $plural2 . "</p>";
        }
        return "<p style='color:red;'>No se ha eliminado nada. $this->conexion->error</p>";
    }
    public function close(){
        $this->conexion->close();
    }

}