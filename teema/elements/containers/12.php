<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container custom-container full-column-container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $area = new ContainerArea($container, 'Vasen sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
    </div>
</div>