let ezcastList = document.getElementById('ezcastList');
let configList = document.getElementById('configList');

getEZCasts();
getSharedConfigs();

function onEZCastsLoaded(json) {
  for (let i = 0; i < json.length; i++) {
    ezcastList.innerHTML += '<a class="list-item" href="/"><i class="device list-icon"></i>' + json[i].name + '</a>';
  }
}

function onSharedConfigsLoaded(json) {
  for (let i = 0; i < json.length; i++) {
    configList.innerHTML += '<a class="list-item" href="/"><i class="config list-icon"></i>' + json[i].name + '</a>';
  }
}
