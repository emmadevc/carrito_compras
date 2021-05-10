<?php
session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $id=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="Ok id correcto ".$id."<br>";
            }
            else{
                $mensaje.="ups id incorrecto ".$id;
                break;
            }
            if(is_string(openssl_decrypt($_POST['foto'],COD,KEY))){
                $foto=openssl_decrypt($_POST['foto'],COD,KEY);
                $mensaje.="Ok foto ".$foto."<br>";
            }
            else{
                $mensaje.="ups foto ".$foto;
                break;
            }
            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $nombre=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="Ok nombre ".$nombre."<br>";
            }
            else{
                $mensaje.="ups nombre ".$nombre;
                break;
            }
            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $precio=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="Ok precio ".$precio."<br>";
            }
            else{
                $mensaje.="ups precio ".$precio;
                break;
            }
            if(is_numeric(openssl_decrypt($_POST['cant'],COD,KEY))){
                $cant=openssl_decrypt($_POST['cant'],COD,KEY);
                $mensaje.="Ok id cant ".$cant."<br>";
            }
            else{
                $mensaje.="ups id cant ".$cant;
                break;
            }
            if(!isset($_SESSION['carro'])){
                $producto=array(
                'id'=>$id,
                'foto'=>$foto,
                'nombre'=>$nombre,
                'cant'=>$cant,
                'precio'=>$precio
                );
                $_SESSION['carro'][0]=$producto;
            }
            else{
                $contador=count($_SESSION['carro']);
                $producto=array(
                'id'=>$id,
                'foto'=>$foto,    
                'nombre'=>$nombre,
                'cant'=>$cant,
                'precio'=>$precio
                );
                $_SESSION['carro'][$contador]=$producto;
            }
            
            $mensaje = print_r($_SESSION,true);
            break;
    }
    
}

?>
