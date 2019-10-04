<?php
require_once(($_SERVER['DOCUMENT_ROOT']).'/layout/PageLayout.php');
if (!isset($TPL)) {
  $TPL = new PageLayout();
  $TPL->PageTitle = 'Manage Device';
  $TPL->PageContent = __FILE__;
  include ($_SERVER['DOCUMENT_ROOT']).'/layout/layout.php';
  exit;
}
?>
<h2 id="siteTitle" class="h2-card">Unknown Device</h2>
<section class="card">
  <h3>AirSetup (WiFi)</h3>
  <section class="list">
    <div class="list-item-text">WiFi-Password:   <text id="">undefined</text></div>
    <div class="list-item-text">Hide SSID: <text id="">undefined</text></div>
    <div class="list-item-text">Streaming Settings: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>Device Management</h3>
  <section class="list">
    <div class="list-item-text">Device Language: <text id="">undefined</text></div>
    <div class="list-item-text">Change SSID: <text id="">undefined</text></div>
    <div class="list-item-text">Output Resolution: <text id="">undefined</text></div>
    <div class="list-item-text">EDIDTable: <text id="">undefined</text></div>
    <div class="list-item-text">Maximum Simultaneous WiFi Clients: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>Access Control</h3>
  <section class="list">
    <div class="list-item-text">Cast Code Settings: <text id="">undefined</text></div>
    <div class="list-item-text">Internet Access Control: <text id="">undefined</text></div>
    <div class="list-item-text">Hide Password: <text id="">undefined</text></div>
    <div class="list-item-text">AirView: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>Network Setup</h3>
  <section class="list">
    <div class="list-item-text">Router or Direct Connection Only: <text id="">undefined</text></div>
    <div class="list-item-text">WiFi-Channel Setup: <text id="">undefined</text></div>
    <div class="list-item-text">Manual WiFi Settings: <text id="">undefined</text></div>
    <div class="list-item-text">Manual Lan Settings: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>Add Network</h3>
  <section class="list">
    <div class="list-item-text">Apply new Network Settings: <text id="">undefined</text></div>
    <div class="list-item-text">Scan for available WiFi Networks: <text id="">undefined</text></div>
    <div class="list-item-text">Get the results of the WiFi Scan: <text id="">undefined</text></div>
    <div class="list-item-text">Connect to one of those found networks: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>Advanced Setup</h3>
  <section class="list">
    <div class="list-item-text">Set a new OTA Url: <text id="">undefined</text></div>
    <div class="list-item-text">Set a new Admin Password: <text id="">undefined</text></div>
  </section>
</section>
<section class="card">
  <h3>System Information</h3>
  <section class="list">
    <div class="list-item-text">MAC-Address of wlan0: <text id="">undefined</text></div>
    <div class="list-item-text">IP-Address of wlan0: <text id="">undefined</text></div>
    <div class="list-item-text">Link Status of wlan0: <text id="">undefined</text></div>
    <div class="list-item-text">MAC-Address of wlan1: <text id="">undefined</text></div>
    <div class="list-item-text">IP-Address of wlan1: <text id="">undefined</text></div>
    <div class="list-item-text">Link Status of wlan1: <text id="">undefined</text></div>
    <div class="list-item-text">MAC-Address of wlan2: <text id="">undefined</text></div>
    <div class="list-item-text">IP-Address of wlan2: <text id="">undefined</text></div>
    <div class="list-item-text">Link Status of wlan2: <text id="">undefined</text></div>
    <div class="list-item-text">MAC-Address of wlan3: <text id="">undefined</text></div>
    <div class="list-item-text">IP-Address of wlan3: <text id="">undefined</text></div>
    <div class="list-item-text">Link Status of wlan3: <text id="">undefined</text></div>
    <div class="list-item-text">MAC-Address of LAN: <text id="">undefined</text></div>
    <div class="list-item-text">IP-Address of LAN: <text id="">undefined</text></div>
    <div class="list-item-text">Link Status of LAN: <text id="">undefined</text></div>
    <div class="list-item-text">Firmware Version of the Stick: <text id="">undefined</text></div>
    <div class="list-item-text">Latest Version on given OTA Server: <text id="">undefined</text></div>
    <div class="list-item-text">Number of Logged-In Users: <text id="">undefined</text></div>
    <div class="list-item-text">Internet Connection Status: <text id="">undefined</text></div>
  </section>
</section>
<script src="/js/api.js"></script>
<script><?php include ($_SERVER['DOCUMENT_ROOT']).'/js/device.min.js'; ?></script>
