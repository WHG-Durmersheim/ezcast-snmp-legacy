const ezcastList = document.getElementById('ezcastList');

getEZCasts();

function onEZCastsLoaded(json) {
  ezcastList.innerHTML = '';
  for (var i = 0; i < json.length; i++) {
    ezcastList.innerHTML += '<span class="list-item" href="/pages/device.php?id='
    + json[i].id + '"><i class="device list-icon"></i>'
    + json[i].name + '<button class="delete" onclick="" type="button">Delete</button></span>';
  }
}
