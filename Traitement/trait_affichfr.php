<?php
require_once '../Controller/Mgr_depot.php';
require_once '../Controller/Mgr_agent.php';
require_once '../Controller/Mgr_feuille.php';
require_once '../Controller/Finder.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$log="Coulibaly53";
$mdp = "CoulibalyMarc-Andre22753";

$manag = new Mgr_agent();
$control = $manag->recup_ag($log, $mdp);
//var_dump($control);
//exit();
$list = array();
$list = $manag->list_ac($control);
$manfr = new Mgr_feuille();
$mandep= new Mgr_depot();
//var_dump($list);exit();
for ($i = 0; $i < count($list); $i++ ): ?>
<?php 
     //var_dump($list[$i]);exit();
$id=(int)$list[$i]->getId_ag();


$fr = $manfr->recup_fr($id);
//var_dump($fr);
//exit();

    
?> 
<div class='panel panel-info'>
    <div class='text-center panel-heading' role='tab' id='heading<?php echo $i;?>'>
        <h3 class='panel-title'>
            <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse<?php echo $i;?>' aria-expanded='false' aria-controls='collapse<?php echo $i;?>'>
            <?php echo $list[$i]->getNom_ag()." ".$list[$i]->getPrm_ag(); ?>
            </a>
        </h3>
    </div>
    <div id='collapse<?php echo $i;?>' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading<?php echo $i;?>'>
        <div class='panel-body'>
            <form method='POST' class='route'>
                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th><label for=''>Libelle du depot</label></th>
                            <th><label for=''>Localisation</label></th>
                            <th><label for=''>Etat</label></th>
                            <th><label for=''>Date et Heure</label></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_string($fr)) {?>
                            <tr> <td><h3 class="text-center"><?php echo $fr ?></h3></td></tr>
                        <?php }else {?>
                        
                        <?php    
                            $spot= array();
                            if ($fr->getVal_fr() == NULL) {
                            $spot= $mandep->list_dep($fr);
                            //var_dump($spot);exit();    
                            } 
                        ?>
                        <form method='POST' class='route'>
                         <?php for($j=0;$j < count($spot);$j++):?>
                            <tr>
                                <td><?php echo $spot[$j]->getId_sp();?></td>
                                
                                <?php 
                                    if (is_null($spot[$j]->getId_vil())) {
                                       $find= new Finder();
                                       $loc= $find->fcz($spot[$j]->getId_zone());
                                        echo '<td> '.$loc.' </td>';
                                    }  else {
                                        $find= new Finder();
                                       $loc= $find->fdv($spot[$j]->getId_vil());
                                        echo '<td> '.$loc.' </td>';                                        
                                    }
                                    //var_dump($spot[$j]->getEtat());exit();
                                    if ($spot[$j]->getEtat()==1) {
                                        echo '<td>Rempli</td>';
                                    }elseif ($spot[$j]->getEtat()==0) {
                                        echo '<td>vide</td>';    
                                        }
                                ?>
                                <td><?php echo $spot[$j]->getDate_sp();?></td>
                            </tr>
                        <?php  endfor;?>
                            <input type='hidden' name='idfr' value='<?php echo $fr->getId_fr();?>'>
                            <input type='hidden' name='tagent' value='<?php echo $control->getId_tagent();?>'>
                            <input type='hidden' name='idcont' value='<?php echo $control->getId_ag();?>'>
                        <?php  }?>
                    </tbody>
                </table>
                <div class='col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3' >
                    
                    <input type='submit' class='btn btn-primary btn-lg btn-block '/>
                 </div>
            </form>
        </div>
    </div>
</div>
<?php endfor; ?>
