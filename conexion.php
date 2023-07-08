<?php 
function conectar(){

    $user = "root";
    $key = "";
    $server = "localhost";
    $dataBase = "crews";
    $conexion = mysqli_connect($server,$user,$key,$dataBase);
   
    return $conexion;
} 

function mostrarTabla($conexion){
    $sql="SELECT * FROM crews";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result))
{   
    echo " <tr> <td>".$mostrar['Nombre']."</td>
          <td>".$mostrar['Apellido']."</td>
          <td>".$mostrar['PCP']."</td> </tr>";
}
}
function buscador($conexion){    
    
    if(isset($_POST['enviar'])){
    $datos=$_POST['buscador'];
    $consulta = mysqli_query($conexion,"SELECT * FROM crews WHERE LOWER(Nombre) LIKE LOWER('%$datos%') OR LOWER(Apellido) LIKE LOWER('%$datos%') ");
    
    while($mostrar=mysqli_fetch_array($consulta))
    {   
        echo " <tr> <td>".$mostrar['Nombre']."</td>
              <td>".$mostrar['Apellido']."</td>
              <td>".$mostrar['PCP']."</td> </tr>";
    }
} 
else{
mostrarTabla($conexion);


}
}
?>







