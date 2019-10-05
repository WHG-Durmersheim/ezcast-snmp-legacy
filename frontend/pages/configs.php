<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Manage Shared Configs';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2 class="card-margin">Manage Shared Configs</h2>
<section class="small grid">
  <section class="card">
    <h3>EZCasts</h3>
    <section id="configList" class="list">
      <span class="list-item"><i class="config list-icon"></i>Loading...</span>
    </section>
  </section>
  <section class="card">
    <h3>Create New Shared Config</h3>
    <p>
      Create a new shared configs file that you can apply to multiple devices.
      <br><br>
      <button onclick="" type="button">Create</button>
    </p>
  </section>
</section>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/configs.min.js'; ?></script>
