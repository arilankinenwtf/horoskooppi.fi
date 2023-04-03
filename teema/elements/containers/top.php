<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container-fluid custom-container top-container">
    <div class="row">
        <div class="col-md-6 top-vasen">
            <?php
            $area = new ContainerArea($container, 'Vasen sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
        <div class="col-md-6 top-oikea">
            <?php
            $area = new ContainerArea($container, 'Oikea sarake');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 top-alin blobs">
            <div class="blob-one"></div>
            <div class="blob-two"></div>
            <div class="blob-three"></div>
        </div>

    </div>
</div>