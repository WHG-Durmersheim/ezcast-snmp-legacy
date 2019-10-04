const url = window.location.origin + ':9000/api/v1';

checkBackend();

async function checkBackend() {
    fetch(url + '/status').then(function(response) {
        return response.text();
    }).then(function(text) {
        var json = JSON.parse(text)
        console.log('%cSuccessfully connected to backend!\n' + json.message + '\nVersion: ' + json.version, 'color: #88f;');
    }).catch(function(error) {
      location.href = '/pages/disconnected.php'
    });
}

async function getEZCasts() {
    fetch(url + '/ezcasts').then(function(response) {
        return response.text();
    }).then(function(text) {
        onEZCastsLoaded(JSON.parse(text).ezcasts);
    }).catch(function(error) {
        console.log('Request failed', error);
    });
}

async function getSharedConfigs() {
    //TODO
    const text = '[{"name": "Example"}, {"name": "1st Floor"}, {"name": "2nd Floor"}]'
    onSharedConfigsLoaded(JSON.parse(text));
}
