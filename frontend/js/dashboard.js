const ezcastList = document.getElementById('ezcastList');
const configList = document.getElementById('configList');

getEZCasts();
getSharedConfigs();

function onEZCastsLoaded(json) {
  ezcastList.innerHTML = '';
  if (json.length == 0) {
    ezcastList.innerHTML += '<span class="list-item"><i class="device list-icon"></i>No EZCasts found</span>';
  } else {
    for (var i = 0; i < json.length; i++) {
      ezcastList.innerHTML += '<a class="list-item" href="/pages/device.php?id=' + json[i]._id + '"><i class="device list-icon"></i>' + json[i].name + '</a>';
    }
  }
}

function onSharedConfigsLoaded(json) {
  configList.innerHTML = '';
  if (json.length == 0) {
    configList.innerHTML += '<span class="list-item"><i class="config list-icon"></i>No Shared Configs found</span>';
  } else {
    for (var i = 0; i < json.length; i++) {
      configList.innerHTML += '<a class="list-item" href="/pages/config.php?id=' + json[i]._id + '"><i class="config list-icon"></i>' + json[i].configName + '</a>';
    }
  }
}
