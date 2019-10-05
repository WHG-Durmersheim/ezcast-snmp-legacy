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
<h2 class="card-margin">Dashboard</h2>
<section class="small grid">
  <section class="card">
    <h3>EZCasts</h3>
    <section id="ezcastList" class="list">
      <span class="list-item"><i class="device list-icon"></i>Loading...</span>
    </section>
  </section>
  <section class="card">
    <h3>Shared Configs</h3>
    <section id="configList" class="list">
      <span class="list-item"><i class="config list-icon"></i>Loading...</span>
    </section>
  </section>
</section>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/dashboard.min.js'; ?></script>
