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
    public function insert(string $nombre, $pass):string{
        if($stmt = $this->conexion->prepare("INSERT INTO usuarios VALUES (?, ?)")) {
            $stmt->bind_param('ss',$nombre, $pass);
            $stmt->execute();
            $stmt->close();
            return "<p style='color:green;'>Se ha insertado correctamente la sentencia</p>";
        }
        return "<p style='color:red;'>No se ha podido insertar. $this->conexion->error</p>";

    }
    /*public function select(string $nombre):string{
        $msj="";
        if ($stmt = $this->conexion->prepare("SELECT * FROM usuarios WHERE nombre=?")) {
            $stmt->bind_param('s',$nombre);
            $stmt->execute();
            $stmt->bind_result($nombre, $pass);
            while ( $fila = $stmt->fetch() ) {
                $msj.= "Nombre: ".$nombre." pass: ".$pass."<br>";
            }
            $stmt->close();
            return $msj;
        }
        return "<p style='color:red;'>No se ha ejecutado. ".$this->conexion->error."</p>";
    }*/
    public function select(){
        if ($resultado = $this->conexion->query("SELECT * FROM usuarios")) {
            $i=0;
            while ( $fila = $resultado->fetch_assoc() ) {
                $msj.= "<label id='label".$i."'>Nombre: ".$fila['nombre']." pass: ".$fila['pasword']."</label> <button type='submit' name='update' value='".$i."--->".$fila['nombre']."--->".$fila['pasword']."'>Actualizar</button><button type='submit' name='delete' value='".$fila['nombre']."--->".$fila['pasword']."'>Eliminar</button><br>";
                $i++;
            }
            return $msj;
            //<button type="submit" name="submit" value="update">Actualizar</button>
            //    <button type="submit" name="submit" value="delete">Eliminar</button>
        }
        return "<p style='color:red;'>No se ha ejecutado. ".$this->conexion->error."</p>";
    }
    public function edit($count){
        if ($resultado = $this->conexion->query("SELECT * FROM usuarios")) {
            $i=0;
            while ( $fila = $resultado->fetch_assoc() ) {
                if($count==$i){
                    $msj.= "Nombre: <input type='text' name='username' value='".$fila['nombre']."' readonly='readonly'><input type='text' name='password' value='".$fila['pasword']."'><button type='submit' name='submit' value='set'>Actualizar</button><br>";
                }else{
                    $msj.= "<label id='label".$i."'>Nombre: ".$fila['nombre']." pass: ".$fila['pasword']."</label> <button type='submit' name='update' value='".$i."--->".$fila['nombre']."--->".$fila['pasword']."'>Actualizar</button><button type='submit' name='delete' value='".$fila['nombre']."--->".$fila['pasword']."'>Eliminar</button><br>";
                }
                $i++;
            }
            return $msj;
        }
        return "<p style='color:red;'>No se ha ejecutado. ".$this->conexion->error."</p>";
    }
    public function delete(string $nombre):string{
        if($stmt = $this->conexion->prepare("DELETE FROM usuarios WHERE nombre=?")) {
            $stmt->bind_param('s',$nombre);
            $stmt->execute();
            $plural1 = $this->conexion->affected_rows > 1 ? "n" : "";
            $plural2=$this->conexion->affected_rows > 1 ? "s" : "";
            $stmt->close();
            return "<p style='color:green;'>Se ha".$plural1." eliminado correctamente " . $this->conexion->affected_rows . " registro" . $plural2 . "</p>";
        }
        return "<p style='color:red;'>No se ha eliminado nada. $this->conexion->error</p>";
    }
    public function update(string $nombre, string $newpassword):string{
        if($stmt = $this->conexion->prepare("UPDATE usuarios SET nombre= ?, pasword = ? WHERE nombre = ?")){
            $stmt->bind_param('sss',$nombre,$newpassword, $nombre);
            $stmt->execute();
            $stmt->close();
            return "<p style='color:green;'>Se ha actualizado correctamente el registro</p>";
        }
        return "<p style='color:red;'>No se ha actualizado correctamente. ".$this->conexion->error."</p>";
    }
    public function close(){
        $this->conexion->close();
    }

}