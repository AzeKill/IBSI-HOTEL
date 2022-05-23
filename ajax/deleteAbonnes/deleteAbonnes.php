<?php
	include('../../config.php');

	if(isset($_POST['ida'])){
		$id= $_POST['ida'];
		delete_data($bdd, $id);
	}
	else{
		echo "ERROR";
	}

	// delete data query
	function delete_data($bdd, $id){
		$del = $bdd->prepare("DELETE FROM `abonnes` WHERE idAbonnes ='$id'");
		$check = $del->execute(array());
		if($check==true){
			echo "Abonnes delete";
		}
	}
?>