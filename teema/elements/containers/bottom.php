<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Area\ContainerArea;

?>
<div class="container custom-container bottom-container">
    <div class="row">
        <div class="col-md-8 bottom-one">
            <?php
            $a = new GlobalArea('bottom-container 1');
            $a->display();
            ?>
        </div>
        <div class="col-md-2 bottom-two">
            <?php
            $a = new GlobalArea('bottom-container 2');
            $a->display();
            ?>
        </div>
        <div class="col-md-2 bottom-three">
            <?php
            $a = new GlobalArea('bottom-container 3');
            $a->display();
            ?>
        </div>
    </div>
</div>