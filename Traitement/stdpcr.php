<?php
include '../jpgraph/src/jpgraph.php';
include '../jpgraph/src/jpgraph_bar.php';
require_once '../Traitement/stat.php';

$mois = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre' );
$graph = new Graph(750,300);
$graph->SetScale("textlin");
$bplot= new BarPlot($dpcr);
$bplot->value->Show();
$bplot->value->SetFont(FF_FONT1,FS_NORMAL,9);
$bplot->value->SetFormat("%d depot");
$graph->Add($bplot);
$graph->title->Set("Nombre de depots crees par mois");
$graph->title->SetFont(FF_FONT1,FS_BOLD,12);
$graph->xaxis->title->Set("Mois");
$graph->yaxis->title->Set("Nombre de depots");
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->SetTickLabels($mois);
$graph->Stroke();
?>