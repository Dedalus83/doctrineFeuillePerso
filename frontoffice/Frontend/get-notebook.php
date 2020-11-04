<h1>Carnet de voyage</h1>
<div class="body dark-background">
      <div class="outer-border">
         <div class="mid-border">
            <div class="inner-border">
              <img class="corner-decoration corner-left-top" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
              <img class="corner-decoration corner-right-top" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
              <img class="corner-decoration corner-right-bottom" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
              <img class="corner-decoration corner-left-bottom" src="https://i.ibb.co/4mKvK3N/corner-decoration.jpg"></img>
              <img class="vertical-decoration top"></img>
            
               <div class="container">
                  <div class="row social-row">
                      <a href="#" target="_blank" class="d-none" style="background-image: url(https://i.ibb.co/k0JQYv4/instagram-social-button.png)"></a>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-centerCustom"> 
                        <p class="text-uppercase white-text countach">
                          <?php foreach ($notes as $note) { ?> 
                            <?= $note->getNote() ?>
                          <?php } ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>

<?php require('../Backend/create-notebook.php'); ?>