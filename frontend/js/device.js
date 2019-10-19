const id = getUrlParameter('id');
const siteTitle = document.getElementById('siteTitle');

getEZCastById(id);

function onEZCastLoaded(json) {
  siteTitle.innerHTML = json.name;
}

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};
