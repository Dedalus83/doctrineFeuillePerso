<header>
  <div id="navcss">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="characterPage.php"><?php if (isset($_SESSION['pseudo'])) {echo $_SESSION['pseudo'];} else { echo "Personnage";} ?>
        </a>
    <input class="navbar-toggler navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://origine.epizy.com">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="map.php">Carte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deconnexion-user.php">Deconnexion</a>
          </li>
        <li class="nav-item">
            <span id="theme-toggle" class="theme-toggle nav-link"></span>
        </li>
      </ul>
      </form>
    </div>
  </nav>
</div>
</header>

