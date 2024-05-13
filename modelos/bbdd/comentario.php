<?php


	function nuevo_comentario($id_usu, $id_ficha, $comentario){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "INSERT INTO comentarios (id_usuario, id_recurso, comentario) VALUES (?,?,?)";
		$mbd->prepare($sql)->execute([$id_usu, $id_ficha, $comentario]);
		
    }


	function listado_comentarios_por_recurso($id_recurso){

		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$comentarios = $mbd->query("SELECT * FROM comentarios WHERE id_recurso='$id_recurso'");
		$array = $comentarios->fetchAll(PDO::FETCH_ASSOC);
		return $array;
		
	}
	
	
?>