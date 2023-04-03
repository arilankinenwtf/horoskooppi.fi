<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container-fluid custom-container yhteys-top-container">
    <div class="row">
        <div class="col-md-12 yhteys-top-teksti">
            <?php
            $area = new ContainerArea($container, 'yhteys top teksti');
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