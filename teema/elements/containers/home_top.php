<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container-fluid custom-container home-top-container">
    <div class="row">
        <div class="col-12 col-md-6 home-top-teksti">
            <?php
            $area = new ContainerArea($container, 'Home top teksti');
            $a->setAreaGridMaximumColumns(12);
            $area->display($c);
            ?>
        </div>
        <div class="col-12 col-md-6 home-top-kuva">
            <?php
            $area = new ContainerArea($container, 'Home top kuva');
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