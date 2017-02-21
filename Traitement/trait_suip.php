<?php
require_once '../Controller/Mgr_prest.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mprest= new Mgr_prest($conx);
$prest=array();
$prest= $mprest->liste_prest();
//var_dump($prest);exit();
        
for ($i = 0; $i < count($prest); $i++): ?>
<tr>
    <td><?php echo $prest[$i]->getRs_prest(); ?></td>
    <td>
        <select name="del" id="input" class="form-control" required="required">
            <option value='F'>F</option>
            <option value='E'>E</option>
            <option value='D'>D</option>
            <option value='C'>C</option>
            <option value='B'>B</option>
            <option value='A'>A</option>
        </select>
    </td>
    <td>
        <select name="propr" id="input" class="form-control" required="required">
            <option value='F'>F</option>
            <option value='E'>E</option>
            <option value='D'>D</option>
            <option value='C'>C</option>
            <option value='B'>B</option>
            <option value='A'>A</option>
        </select>
    </td>
    <td>
        <?php echo $prest[$i]->getEv_prest(); ?>
    </td>
    <td>
        <select name="eval" id="input" class="form-control" required="required">
            <option value='Non effectué'>Non effectué</option>
            <option value='Mal fait'>Mal fait</option>
            <option value='Acceptable'>Acceptable</option>
            <option value='Propre'>Propre</option>
        </select>
    </td>
<input type='hidden' name='id' value='<?php echo $prest[$i]->getId_prest(); ?>'>
    <td><button type="submit" class="btn btn-primary">Noter</button></td>
</tr>
<?php endfor; ?>
