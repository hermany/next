<?php
	require_once("config.php");

	require_once(_RUTA_HOST."nucleo/clases/class-constructor.php");

	$fmt = new CONSTRUCTOR();

	$sql ="SELECT * FROM mod_sucursales where mod_suc_activar=1 order by mod_suc_id asc";

	$rs = $fmt->query->consulta($sql);
	while($row = $fmt->query -> obt_fila($rs)){
		$id_suc = $row["mod_suc_id"];
		$correo = $row["mod_suc_correo"];
		$nombre_suc = $row["mod_suc_nombre"];
		$sw=false;
		$mensaje = '<h3>'.$nombre_suc.'</h3>
<p>lista de productos que tienen 10 o menos productos</p>
<table width="350px" border="1px" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Cant.</th>
		</tr>
	</thead>
	<tbody>';

		$sql3="select DISTINCT mod_prod_id,mod_prod_nombre, mod_prod_ruta_amigable, mod_prod_imagen, mod_prod_id_dominio, mod_prod_tags, mod_prod_id_marca, mod_prod_detalles,mod_prod_especificaciones FROM mod_stock, mod_productos where mod_prod_id=mod_stk_prod and mod_stk_suc=$id_suc ORDER BY mod_prod_id asc";
		$rs3=$fmt->query->consulta($sql3);
		$num_lim = $fmt->query->num_registros($rs3);
		if($num_lim>0){
			for($j=0;$j<$num_lim;$j++){
				list($fila_id,$fila_nombre,$fila_ra,$fila_imagen, $fila_dominio,$fila_tags, $fila_id_marca, $fila_resumen, $fila_esp)=$fmt->query->obt_fila($rs3);
				$cant = TraerCantidad($fila_id, $id_suc);
				$cant_total = $cant[0];
				if($cant_total<10){
					$porcentaje=1;
				}
				else{
					$cant_rest = $cant[1];
					$porcentaje=$cant_total*0.10;
				}
				if($cant_rest<=$porcentaje){
					$sw=true;
					$mensaje.='<tr>
			<td>'.$fila_id.'</td>
			<td>'.$fila_nombre.'</td>
			<td>'.$cant_rest.'</td>
		</tr>';
				}
			}
			$mensaje.='</tbody>
</table>';
	echo $mensaje;
			if($sw){
				$sw=$fmt->mail->enviar('murey@panaderiavictoria.com','Murey',$mensaje,"Stock web - ".$fila["nombre"],"Panaderia Victoria");
				$sw=$fmt->mail->enviar($correo,'Limite de Stock',$mensaje,"Stock limite web - ".$fila["nombre"],"Panaderia Victoria");
			}
		}

	}

	function TraerCantidad($prod_id, $suc_id){
	  $fmt = new CONSTRUCTOR;
	  $sql="select mod_stk_cantidad from mod_stock where mod_stk_prod='$prod_id' and mod_stk_suc='$suc_id'";
      $rs =$fmt->query->consulta($sql);
      $num=$fmt->query->num_registros($rs);
      $cant=0;
      if($num>0){
      	for($i=0;$i<$num;$i++){
	      	list($fila_cantidad)=$fmt->query->obt_fila($rs);
	      	$cant=$cant+$fila_cantidad;
      	}
      }

      $sql="select id_cli_ped_cantidad from mod_cliente_pedido where id_cli_ped_id_prod='$prod_id' and id_cli_ped_id_suc='$suc_id'";
      $rs =$fmt->query->consulta($sql);
      $num=$fmt->query->num_registros($rs);
      $cant_v=0;
      if($num>0){
      	for($i=0;$i<$num;$i++){
	      	list($fila_cantidad)=$fmt->query->obt_fila($rs);
	      	$cant_v=$cant_v+$fila_cantidad;
      	}
      }
	 $restante = $cant-$cant_v;
	 $cant_aux[0]=$cant;
	 $cant_aux[1]=$restante;
	 return $cant_aux;
	 }
?>


