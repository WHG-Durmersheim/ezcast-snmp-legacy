<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'About';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<section class="card-margin">
  <img id="image-first" alt="The letter I in a circle" src="/images/ic_color_about.svg" width="48px">
  <h3>About</h3>
  <p>
    A responsive web interface for deploying, managing and maintaining multiple EZCast Pro II Sticks.<br>
    This website was originally developed for the WHG-Durmersheim.
    <br><br>
    <button onclick="location.href='https://github.com/WHG-Durmersheim/ezcast-snmp'" type="button">Repository</button>
    <button onclick="location.href='https://github.com/WHG-Durmersheim/ezcast-snmp/blob/master/CONTRIBUTORS.MD'" type="button">Contributors</button>
  </p>
</section>
