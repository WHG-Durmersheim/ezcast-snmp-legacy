<?php
  require_once('PageLayout.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EZCast <?php if(isset($TPL->PageTitle)) { echo ' | '; echo $TPL->PageTitle; } ?></title>
  <link rel="stylesheet" type="text/css" href="/css/main.min.css" />
  <meta name="theme-color" content="#fff">
  <link rel="icon" href="/favicon.ico">
  <meta name="description" content="Dashboard for managing EZCast Pro sticks" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
      <button id="menuBtn" type="button" onclick="openMenu()">Men&uuml;</button>
      <h1>EZCast Management</h1>
  </header>
  <div id="nav-bg"></div>
  <nav>
    <h1 class="nav-link">EZCast Management</h1>
    <a class="nav-link" href="/"><i class="dashboard nav-icon"></i>Dashboard</a>
    <a class="nav-link" href="/pages/devices.php"><i class="devices nav-icon"></i>Manage devices</a>
    <a class="nav-link" href="/pages/configs.php"><i class="configs nav-icon"></i>Manage shared configs</a>
    <a class="nav-link" href="/pages/about.php"><i class="about nav-icon"></i>About</a>
    <a class="footer-text" href="https://icons8.com/">Icons by Icons8</a>
  </nav>
  <main>

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

  </main>
  <script src="/js/header.min.js" async></script>
</body>
</html>
