const siteTitle = document.getElementById('siteTitle');
const jsonTxt = document.getElementById('jsonTxt');
const ezcastList = document.getElementById('ezcastList');
const id = getUrlParameter('id');

if (id != '') getSharedConfigById(id);

function onSharedConfigLoaded(json) {
  console.log(json);
  siteTitle.innerHTML = json.configName;
  jsonTxt.value = JSON.stringify(json, null, 2);
}

function saveAndApplySharedConfig() {
  if (id == '') addSharedConfig(jsonTxt.value);
  else alert('Editing is not yet supported!');
}

function onSharedConfigAdded() {
  location.href = '/pages/configs.php';
}

function getUrlParameter(name) {
  name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
  var results = regex.exec(location.search);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
