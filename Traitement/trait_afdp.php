<?php
require_once '../Controller/Mgr_depot.php';
require_once '../Controller/Finder.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dep= new Mgr_depot();
$list=array();
$list= $dep->list_nvdep();
//var_dump($list);exit();
if(count($list) != 0 ): ?>
<?php    for ($i=0;$i<count($list);$i++):?>
    <tr>
    <form  method="POST" class="afdp">
        <td> <?php echo $list[$i]->getId_sp() ?> </td>
        <?php 
            if (is_null($list[$i]->getId_vil())) {
             $find = new Finder();
             $result = $find->fcz($list[$i]->getId_zone());
            }  else {
             $find = new Finder();
             $result = $find->fdv($list[$i]->getId_vil());  
            } 
        ?>
        <td> <?php echo $result ?> </td>
        <td>
            <input type="radio" name="validation" id="input" value="oui">	
        </td>
        <td>
            <input type="radio" name="validation" id="input" value="non">	
        </td>
    <input type="hidden" value="<?php echo $list[$i]->getId_sp(); ?>">
    <input type="hidden" value="<?php echo $sup->getId_ag(); ?>">    
    <td> <button type="submit" class="btn btn-primary">Envoyer</button></td>
    </form>
    </tr>
<?php endfor; ?>
<?php endif; 
 if (count($list)==0): ?>
    <tr>
        <td colspan="5"><h3 class="text-center">Aucun nouveau depot signalé</h3> </td>
    </tr>
 <?php endif; ?>



