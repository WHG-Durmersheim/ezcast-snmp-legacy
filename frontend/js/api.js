const url = 'http://localhost:9000';

async function getEZCasts() {
  fetch(url + '/api/v1/ezcasts')
  .then(function(response) {
    return response.text();
  })
  .then(function(text) {
    onEZCastsLoaded(JSON.parse(text).ezcasts);
  })
  .catch(function(error) {
    console.log('Request failed', error);
  });
}
