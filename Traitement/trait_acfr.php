<?php
require_once '../Controller/Mgr_agent.php';
require_once '../Controller/Mgr_feuille.php';
require_once '../Controller/Mgr_depot.php';
require_once '../Controller/Finder.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$login='Boko42';
$mdp='BokoLaura34542';

$mag= new Mgr_agent();
$mfr= new Mgr_feuille();
$mdep= new Mgr_depot();
$find= new Finder();

$sup= $mag->recup_ag($login, $mdp);
$cont= array();
$cont= $mag->list_cont($sup);
//var_dump($cont);exit();
$ac=array();
for ($i=0;$i<count($cont);$i++) {
    //var_dump($value->getId_ag());exit();
    $ac[$i]= $mag->list_ac($cont[$i]);
}
//var_dump($ac);exit();
$feuille=array();
for ($i = 0; $i < count($ac); $i++):?>

<?php //var_dump(count($ac[$i]));exit();
for ($j=0; $j <count($ac[$i]) ; $j++):?>  
<?php 
$feuille= $mfr->list_valid($ac[$i][$j]->getId_ag());
 //var_dump($feuille); exit();  
?>
<div class='panel panel-info'>
    <div class='text-center panel-heading' role='tab' id='heading<?php echo $j;?>'>
        <h3 class='panel-title'>
            <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapse<?php echo $j;?>' aria-expanded='false' aria-controls='collapse<?php echo $j;?>'>
            <?php echo  $ac[$i][$j]->getNom_ag()." ".$ac[$i][$j]->getPrm_ag(); ?>
            </a>
        </h3>
    </div>
    
    <div id='collapse<?php echo $j;?>' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading<?php echo $j;?>'>
        <div class='panel-body'>
            <?php if (!is_array($feuille)) {?>
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
                        <?php 
                           $dep = $mdep->list_dep($feuille);   
                        ?>
                        <?php foreach ($dep as $key => $value):?>
                        <tr>
                            <form method='POST' class='acr'>
                                <td><?php echo $value->getId_sp();?></td>
                                <?php 
                                    if (is_null($value->getId_vil())) {
                                       $loc = $find->fcz($value->getId_zone());
                                    }else{
                                        $loc = $find->fdv($value->getId_vil());
                                    }
                                    echo '<td> '.$loc.' </td>';
                                    if ($value->getEtat() == 1) {
                                        echo '<td> Rempli </td>';   
                                    }else{
                                        echo '<td> Vide </td>';
                                    }
                                 ?>
                                <td><?php echo $value->getDate_sp(); ?></td>
                            </form>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            <?php }else{
                echo '<h3 class="text-center">Aucune Feuille de Ramassage éditée</h3>';
            }?> 
        </div>
    </div>
</div>

<?php endfor; ?>
<?php endfor; ?>


    



