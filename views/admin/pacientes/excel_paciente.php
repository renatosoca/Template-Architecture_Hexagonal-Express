<?php 
include("conexion.php");
$usuarios="SELECT * FROM paciente";
header("Content-Type: application/xls; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=datos-paciente.xls");
?>
<table>
<caption>Datos del Paciente</caption>
<tr>
    <th>DNI</th>
    <th>Paciente</th>
    <th>Género</th>
    <th>Edad</th>
</tr>
<?php $resultado = mysqli_query($conexion, $usuarios);
while ($row = mysqli_fetch_assoc($resultado)) { ?>
 <tr>
    <td><?php echo $row["Nr_Doc"]; ?></td>
    <td><?php echo $row["Nombre"] . " " . $row["Ape_Paterno"]; ?></td>
    <td><?php echo $row["Genero"]; ?></td>
    <td><?php echo $row["Edad"]; ?></td>
</tr>
    <?php } mysqli_free_result($resultado);?>
</table>