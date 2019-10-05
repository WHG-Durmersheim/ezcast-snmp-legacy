<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Manage Devices';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2 class="card-margin">Manage Devices</h2>
<section class="small grid">
  <section class="card">
    <h3>EZCasts</h3>
    <section id="ezcastList" class="list">
      <span class="list-item"><i class="device list-icon"></i>Loading...</span>
    </section>
  </section>
  <section class="card">
    <h3>Add Device</h3>
    <p>
      Address:
      <input type="text" id="urlInput" placeholder="http://127.0.0.1"></input>
      <br><br>
      <button onclick="" type="button">Add</button>
    </p>
  </section>
</section>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/devices.min.js'; ?></script>
