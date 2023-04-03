<?php use Concrete\Core\Validation\CSRF\Token;

defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 footer-first">
        <?php
        // new GlobalArea('nimi') luo yleisen alueen (jos sen nimistä ei vielä ole)
        $a = new GlobalArea('Footer First');
        $a->display();
        ?>
      </div>
      <div class="col-lg-10 footer-second">
        <?php
        $a = new GlobalArea('Footer Second');
        $a->display();
        ?>
      </div>
    
    </div>
    <div class="row">
      <div class="col-md-12 footer-bottom">
        <?php
        // new GlobalArea('nimi') luo yleisen alueen (jos sen nimistä ei vielä ole)
        $a = new GlobalArea('Footer Bottom');
        $a->display();
        ?>
      </div>
    </div>
  </div>
  <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
</div>

<?php $this->inc('elements/footer_bottom.php');?>
