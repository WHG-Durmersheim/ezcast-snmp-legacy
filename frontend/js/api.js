const url = window.location.origin + ':9000/api/v1';

checkBackend();

async function checkBackend() {
    fetch(url + '/status').then(function(response) {
        return response.text();
    }).then(function(text) {
        var json = JSON.parse(text)
        console.log('%cSuccessfully connected to backend!\nVersion: ' + json.version, 'color: #88f;');
    }).catch(function(error) {
      location.href = '/pages/disconnected.php'
    });
}

async function getEZCasts() {
    fetch(url + '/ezcasts').then(function(response) {
        return response.text();
    }).then(function(text) {
        onEZCastsLoaded(JSON.parse(text));
    }).catch(function(error) {
        console.log('Request failed', error);
    });
}

async function getSharedConfigs() {
    fetch(url + '/configs').then(function(response) {
        return response.text();
    }).then(function(text) {
        onSharedConfigsLoaded(JSON.parse(text));
    }).catch(function(error) {
        console.log('Request failed', error);
    });
}

async function addEZCast(name, mainIP) {
    var bodyGenerator = '{"name":"' + name + '","mainIP":"' + mainIP + '"}'
    fetch(url + '/ezcasts', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: bodyGenerator
    }).then(function() {
        getEZCasts();
    }).catch(function(error) {
        console.log('Request failed', error);
    });
}

async function deleteEZCast(id) {
    fetch(url + '/ezcasts/' + id, {
      method: 'DELETE'
    }).then(function() {
        getEZCasts();
    }).catch(function(error) {
        console.log('Request failed', error);
    });
}
