const ezcastList = document.getElementById('ezcastList');
const configList = document.getElementById('configList');

getEZCasts();
getSharedConfigs();

function onEZCastsLoaded(json) {
  for (var i = 0; i < json.length; i++) {
    ezcastList.innerHTML += '<a class="list-item" href="/pages/device.php?id=' + json[i].id + '"><i class="device list-icon"></i>' + json[i].name + '</a>';
  }
}

function onSharedConfigsLoaded(json) {
  for (var i = 0; i < json.length; i++) {
    configList.innerHTML += '<a class="list-item" href="/"><i class="config list-icon"></i>' + json[i].name + '</a>';
  }
}
