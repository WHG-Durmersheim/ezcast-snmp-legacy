let query = getUrlParameter('id');
let siteTitle = document.getElementById('siteTitle');
var ezCast;

getEZCasts();

function onEZCastsLoaded(json) {
  for (let i = 0; i < json.length; i++) {
    if(json[i].id == query) ezCast = json[i];
  }
  siteTitle.innerHTML = ezCast.name;
}

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
