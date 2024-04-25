<div class="container">
  <div class="d-flex justify-content-center align-items-center flex-column">
    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 col-xl-4 col-xxl-4 text-center mb-1">
      <h1>atcs.meme</h1>
    </div>
  </div>
</div>
<div class="d-flex mw-50 mx-auto px-2">
  <nav class="navbar navbar-expand" style="background-color: rgba(37, 37, 37, 1);">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto px-2 d-flex flex-wrap justify-content-center align-items-center">
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="/">Home</a></b>
          </li>
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/current.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="current.php">Aktuelles Turnier</a></b>
          </li>
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/past.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="past.php">Vergangene Turniere</a></b>
          </li>
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/rang.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="rang.php">Rankings</a></b>
          </li>
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/poor.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="poor.php">Supporting</a></b>
          </li>
          <li class="nav-item">
            <b><a <?php if ($_SERVER['SCRIPT_NAME'] == "/os.php") { ?> class="nav-link active" <?php
            } else { ?>
                  class="nav-link" <?php } ?> href="os.php">Open Source</a></b>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<hr>