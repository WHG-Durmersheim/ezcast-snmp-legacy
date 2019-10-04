let ezcastList = document.getElementById('ezcastList');

getEZCasts()

function onEZCastsLoaded(json) {
  console.log(JSON.stringify(json))
  for (let i = 0; i < json.length; i++) {
    ezcastList.innerHTML += '<a class="list-item" href="/"><i class="device list-icon"></i>' + json[i].name + '</a>';
  }
}
