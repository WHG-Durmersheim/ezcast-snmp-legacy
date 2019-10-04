const configList = document.getElementById('configList');

getSharedConfigs();

function onSharedConfigsLoaded(json) {
  configList.innerHTML = '';
  for (var i = 0; i < json.length; i++) {
    configList.innerHTML += '<span class="list-item" href="/pages/device.php?id='
    + json[i].id + '"><i class="config list-icon"></i>'
    + json[i].name + '<button class="delete" onclick="" type="button">Delete</button></span>';
  }
}
