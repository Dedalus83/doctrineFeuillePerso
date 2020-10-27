<?php foreach ($dons as $don) { ?> 
     <p>Nom:</p> 
     <div class="rowCustom"> 
           <form method="post" class="col-1">
                  <input type="hidden" name="fieldEntity" value="<?= get_class($don); ?>"/>
                  <input type="hidden" name="entityId" value="<?= $don->getId(); ?>"/>`
               <button class="btn btn-danger remove" name="remove" value="remove">X</button>
          </form> 
          <div class="col-11">
               <p><span class="border border-primary custom" <?= dynamicInputAttributes("nom", $don); ?>><?=htmlentities($don->getNom())?></p></span>
          </div>
     </div>
     <p>Description: <span class="border border-primary" <?= dynamicInputAttributes("description", $don); ?>><?=htmlentities($don->getDescription())?></span></p>
     <div class="divider div-transparent div-dot"></div>
<?php } ?>  