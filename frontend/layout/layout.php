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
      <h1>EZCast <?php if(isset($TPL->PageTitle)) { echo ' | '; echo $TPL->PageTitle; } ?></h1>
  </header>
  <div id="nav-bg"></div>
  <nav>
    <a class="nav-link" href="/">Dashboard</a>
    <a class="nav-link" href="/">Lorem</a>
    <a class="nav-link" href="/">Ipsum</a>
    <a class="nav-link" href="/">Dolor</a>
    <a class="nav-link" href="/">Sit</a>
  </nav>
  <section id="main">

<?php if(isset($TPL->PageContent)) { include $TPL->PageContent; } ?>

  </section>
  <script src="/js/header.min.js" async></script>
</body>
</html>
