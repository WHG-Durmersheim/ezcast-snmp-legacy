const ezcastList = document.getElementById('ezcastList');
const nameInput = document.getElementById('nameInput');
const addressInput = document.getElementById('addressInput');

getEZCasts();

function onEZCastsLoaded(json) {
  ezcastList.innerHTML = '';
  if (json.length == 0) {
    ezcastList.innerHTML += '<span class="list-item"><i class="device list-icon"></i>No EZCasts found</span>';
  } else {
    for (var i = 0; i < json.length; i++) {
      ezcastList.innerHTML += '<span class="list-item"><i class="device list-icon"></i>'
      + json[i].name + '<button class="edit" onclick="location.href=\'/pages/device.php?id='
      + json[i]._id + '\'" type="button">Edit</button><button class="delete" onclick="deleteEZCast(\''
      + json[i]._id + '\')" type="button">Delete</button></span>';
    }
  }
}

function addEZCastFromForm() {
  addEZCast(nameInput.value , addressInput.value);
  nameInput.value = '';
  addressInput.value = '';
}
