const configList = document.getElementById('configList');

getSharedConfigs();

function onSharedConfigsLoaded(json) {
  configList.innerHTML = '';
  if (json.length == 0) {
    configList.innerHTML += '<span class="list-item"><i class="config list-icon"></i>No Shared Configs found</span>';
  } else {
    for (var i = 0; i < json.length; i++) {
      configList.innerHTML += '<span class="list-item"><i class="config list-icon"></i>'
      + json[i].configName + '<button class="edit" onclick="" type="button">Edit</button><button class="delete" onclick="" type="button">Delete</button></span>';
    }
  }
}
