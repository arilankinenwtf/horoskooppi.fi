<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container custom-container kartta-container">
    <div class="row">
        <div class="col-md-6 kartta-vasen">
            <?php
            $area = new ContainerArea($container, 'Vasen sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
        <div class="col-md-6 kartta-oikea">
            <?php
            $area = new ContainerArea($container, 'Oikea sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
    </div>
</div>