<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Disconnected';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<section class="card-margin">
  <img id="image-first" alt="A disconnected satelite" src="/images/ic_disconnected.svg" width="48px">
  <h3>You are disconnected</h3>
  <p>
    A connection to the backend could not be established.<br>
    Please contact your administrator or try again later.
  </p>
</section>
