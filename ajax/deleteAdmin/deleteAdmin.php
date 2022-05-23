<?php
	include('../../config.php');

	if(isset($_POST['ida'])){
		$id= $_POST['ida'];
		delete_data($bdd, $id);
	}

	// delete data query
	function delete_data($bdd, $id){
		$del = $bdd->prepare("DELETE FROM `admin` WHERE idAdmin ='$id'");
		$del->execute(array());
		echo "admin delete";
		header("Location: ../../admin.php");
	}
?>