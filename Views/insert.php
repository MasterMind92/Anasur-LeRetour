<?php 
	$conx= new PDO("mysql:localhost=host;dbname=projetbdd","root","");
	//$date= ." ".;
	$sql="INSERT INTO spot (lib_sp,precis_sp,etat_sp,visit,date_sp,id_csp,id_zone,id_vil,appli,id_reg) VALUES ('lbl','ezzz',1,1,NOW(),2,NULL,2,3,5)";
	$res=$conx->query($sql);
	if ($res) {
		echo "c'est bon";
	}else
	{
		echo "pas bon";
	}
?>