<?php foreach ($inventaires as $inventaire) {  ?> 
     <p id='<?= $inventaire->getId() ?>'>Nom:<p> 
          <div class="rowCustom"> 
          <form method="post" class="col-1">
                  <input type="hidden" name="fieldEntity" value="<?= get_class($inventaire); ?>"/>
                  <input type="hidden" name="entityId" value="<?= $inventaire->getId(); ?>"/>
                    <button class="btn btn-danger remove" name="remove" value="remove">X</button>
          </form> 
               <div class="col-11">
                    <p><span class="border border-primary custom" <?= dynamicInputAttributes("nom", $inventaire); ?>><?=htmlentities($inventaire->getNom())?></span></p>
               </div>
          </div>
     <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $inventaire); ?>><?=htmlentities($inventaire->getDescription())?></span></p>
     <p>Nombre: <span class="border border-primary" <?= dynamicInputAttributes("nombre", $inventaire, 'number'); ?>><?=htmlentities($inventaire->getNombre())?></span></p>
     <div class="divider div-transparent div-dot"></div>
<?php } ?>

<div class="btn-group fixed-topCustom dropup navbar-toggler navbar-toggler-icon">
  <input class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Inventaire index">
  <div class="dropdown-menu">
      <?php foreach ($inventaires as $inventaire) { ?> 
            <a class="list-group-item fixed-left" href="#<?= $inventaire->getId()?>" ><?= $inventaire->getNom() ?></a>
      <?php } ?>
  </div>
</div>