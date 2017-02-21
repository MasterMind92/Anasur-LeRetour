<?php
require_once '../Connexion/Connexion.php';
require_once '../Controller/Mgr_depot.php';
require_once '../Controller/Mgr_plainte.php';
require_once '../Controller/Mgr_prest.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function pourc($dnc,$nt) {
		if (($dnc==0) || ($nt==0)) {
			$per=0;		
		}else {
			$per=($dnc/$nt)*100;		
		}
        
        return $per;
}

$mpl = new Mgr_plainte();
$mdp = new Mgr_depot();

$plr=array();
$plt=array();
$dpc=array();
$dpnc=array();
$dpcr=array();
$pplr=array();
$pplt=array();
$pdpc=array();
$pdpnc=array();
$pdpcr=array();

for ($j = 1; $j < 13; $j++) {
        $plr[$j-1]=$mpl->npl_rec($j);
        $pplr[$j-1]= pourc($plr[$j-1],$plr[$j-1]);

        $plt[$j-1]=$mpl->npl_tr($j);
        $pplt[$j-1]= pourc($plt[$j-1],$plr[$j-1]);

        $dpcr[$j-1]=$mdp->ndep($j);
        $pdpcr[$j-1]=pourc($dpcr[$j-1],$dpcr[$j-1]);

        $dpc[$j-1]=$mdp->ndep_cont($j);
		$pdpc[$j-1]=pourc($dpc[$j-1],$dpcr[$j-1]);

        $dpnc[$j-1]=$mdp->ndp_ncont($j);
        $pdpnc[$j-1]=pourc($dpnc[$j-1],$dpcr[$j-1]);
}

//var_dump($dpcr);exit();

