// Routes of the EZCast REST endpoint

module.exports = (app) => {
    const ezcasts = require('../controllers/ezcast.controller.js');

    // Create a new EZCast
    app.post('/ezcasts', ezcasts.create);

    // Retrieve all EZCasts
    app.get('/ezcasts', ezcasts.findAll);

    // Retrieve a single EZCast with ezcastId
    app.get('/ezcasts/:ezcastId', ezcasts.findOne);

    // Update a EZCast with ezcastId
    app.put('/ezcasts/:ezcastId', ezcasts.update);

    // Delete a EZCast with ezcastId
    app.delete('/ezcasts/:ezcastId', ezcasts.delete);
}
