<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Dashboard';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2 class="h2-card">Dashboard</h2>
<section class="card">
  <h3>EZCasts</h3>
  <section id="ezcastList"></section>
</section>
<section class="card">
  <h3>Card</h3>
  <p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    At vero eos et accusam et justo duo dolores et ea rebum.
    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
  </p>
</section>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/dashboard.js'; ?></script>
