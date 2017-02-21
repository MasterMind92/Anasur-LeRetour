<?php
require_once '../Controller/Mgr_prest.php';
require_once '../Controller/Mgr_plainte.php';
require_once '../Controller/Finder.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mpl= new Mgr_plainte();
$mpr=new Mgr_prest();
$mfd=
$plainte=array();

$plainte= $mpl->list_plainte();

if (is_string($plainte)) {?>
<td class="text-center"> <h3>Aucune tâche disponible</h3> </td>
<?php }  
    else {
     foreach ($plainte as $key => $value) {?>
        <td><?php echo $value->getLib_pl();?></td>
        <td><?php echo $value->getLib_pl();?></td>
     <?php } ?>
<?php } ?>
         
     


  
