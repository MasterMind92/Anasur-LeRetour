<?php
require_once '../Controller/Mgr_depot.php';
require_once '../Controller/Finder.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mandep= new Mgr_depot();
$dep=array();
$dep= $mandep->list_nvdep();
//var_dump($mandep->list_nvdep());exit();
if (array_key_exists(0, $dep)):?>
<?php for($i=0;$i< count($dep);$i++):?>
    <form class='newspot' method='POST'>
        <tr>
            <td><?php echo $dep[$i]->getId_sp(); ?></td>
            <?php 
            if (is_null($dep[$i]->getId_vil())) {
                //partie depot avec zone
                $find= new Finder();
                $loc= $find->fcz((int)$dep[$i]->getId_zone());
                echo '<td> '.$loc.' </td>';
            }  else {
                //partie depot avec ville
                $find= new Finder();
                $loc= $find->fdv((int)$dep[$i]->getId_vil());
                echo '<td> '.$loc.' </td>';
            }
            ?>
            <td> <input type='radio' name='validation' value='yes'></td>
            <td><input type='radio' name='validation' value='no'></td>
            <input type='hidden' name='id' value='<?php $dep[$i]->getId_sp();?>'>
            <td><input type='submit' class='btn btn-primary' value='Valider'></td>
        </tr>    
    </form>
<?php endfor;endif;
if(!array_key_exists(0, $dep)):?>
<tr><td colspan='5'><h3 class="text-center"> Aucun Dépot à Valider </h3></td></tr>
<?php endif; ?>

