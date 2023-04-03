<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container custom-container form-container">
    <div class="row">
        <div class="col-md-5 form-teksti">
            <?php
            $area = new ContainerArea($container, 'Vasen sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
        <div class="col-md-7 form-lomake">
            <?php
            $area = new ContainerArea($container, 'Oikea sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
    </div>
</div>