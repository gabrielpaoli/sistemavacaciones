

<table class="table">
  <tr>
    <th>Nombre</th>
    <th>Fecha de vacaciones</th>
    <th>Días totales</th>
    <th>Días restantes</th>
    <th>Aprobado</th>
  </tr>

<?php


foreach($datos as $key => $dato):
	if($dato["vacaciones_aprobadas"] == 1):
		$checked = "checked";
	else:
		$checked = "";
	endif;

	print '<tr>';
  	print '<td>'.$dato["name"].'</td>';
  	print '<td>';
  	foreach($dato["vacaciones"] as $indVacaciones):
  		print ' '.$indVacaciones.'<br>';
  	endforeach;
		print '</td>';    	
  	print '<td>'.$dato["dias_totales"].'</td>';
  	print '<td>'.$dato["dias_restantes"].'</td>';			
  	print '<td><input type="checkbox" id="cbox2" value="second_checkbox" '.$checked.'></td>';			
  print '</tr>';
endforeach;

?>

</table>

