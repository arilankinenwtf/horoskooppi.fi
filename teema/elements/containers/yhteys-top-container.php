<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container-fluid custom-container yhteys-top-container">
    <div class="row">
        <div class="col-12 col-md-12 yhteys-top-teksti">
            <?php
            $area = new ContainerArea($container, 'yhteys top teksti');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 yhteys-top-pallurat">
            <?php
            $area = new ContainerArea($container, 'yhteys top pallurat');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>

    </div>
</div>