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
    <h1 class="nav-link">EZCast  Management</h1>
    <a class="nav-link" href="/"><i class="dashboard nav-icon"></i>Dashboard</a>
    <a class="nav-link" href="/"><i class="settings nav-icon"></i>Manage devices</a>
    <a class="nav-link" href="/"><i class="edit nav-icon"></i>Edit shared configs</a>
    <a class="nav-link" href="/"><i class="edit nav-icon"></i>Edit device list</a>
  </nav>
  <section id="main">

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

    <section class="footer-text">
      <a href="https://icons8.com/" class="footer-text">Icons by Icons8</a>
    </section>
  </section>
  <script src="/js/header.min.js" async></script>
</body>
</html>
