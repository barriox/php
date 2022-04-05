<?php
spl_autoload_register( function( $clase ) {
    include $clase . '.php';
});
$f_name=$l_name=$dir=$job=$lan=$spec=$msj="";
$year=$age=0;
if(isset($_POST['submit'])){
    if(validar(0,$_POST['f_name']) && validar(0,$_POST['l_name'])){
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
    }
    if(validar(1, $_POST['dir'])){
        $dir=$_POST['dir'];
    }
    if(is_numeric($_POST['age'])){
        $age=$_POST['age'];
    }
    if($f_name=="" || $l_name=="" || $dir=="" || $age==0){
        $msj="<p style='color:red'>Es obligatorio rellenar los campos con *</p>";
    }
    $per2 = new Persona($f_name,$l_name,$dir,$age);
    if(isset($_POST['prof'])){
        if($_POST['prof']=="medicos" && validar(0, $_POST['spec']) && validar(2,$_POST['year'])){
            $spec=$_POST['spec'];
            $year=$_POST['year'];
            if($spec && $year){
                $med2 = new Medico($f_name,$l_name,$dir,$age, $spec,$year);
            }
        }elseif($_POST['prof']=="medicos" && validar(0, $_POST['job'])){
            $job=$_POST['job'];
            $lan=$_POST['lan'];
            if($job && $lan){
                $pro2 = new Programador($f_name,$l_name,$dir,$age, $lan,$job);
            }
        }else{
            $msj="<p style='color:red'>El formato no es correcto, la especialización no debe contener números y el año debe ser valido (1900-2022)</p>";
        }
    }else{
        $per2 = new Persona($f_name,$l_name,$dir,$age);
    }
}
function validar($case,$string){
    switch($case){
        case 0:
            if(preg_match("/^[\D]+$/", $string)){
                return true;
            }
            return false;
        case 1:
            if(preg_match("/^[\w\s,-º]+$/", $string)){
                return true;
            }
            return false;
        case 2:
            if(preg_match("/^19[0-9]{2} || 20[0-2]{1}[0-9]{1}$/", $string)){
                return true;
            }
            return false;
    }
}
echo $per2;
echo $med2;
echo $pro2;
?>