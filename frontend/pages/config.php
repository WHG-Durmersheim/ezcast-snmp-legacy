<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Manage Shared Config';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2 id="siteTitle" class="card-margin">New Shared Config</h2>
<section class="card">
  <h3>JSON Code</h3>
  <p>
    Please enter your JSON code below.
  </p>
  <textarea id="jsonTxt">
{
  "configName": "New Shared Config"
}
  </textarea>
</section>
<section class="card">
  <h3>EZCasts</h3>
  <p>
    Please select the EZCasts you want to apply this configs to.
  </p>
  <section id="ezcastList" class="list">
    <span class="list-item"><i class="device list-icon"></i>Not yet implemented</span>
  </section>
</section>
<button  class="card-margin" onclick="saveAndApplySharedConfig()" type="button">Save and apply</button>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/config.min.js'; ?></script>
