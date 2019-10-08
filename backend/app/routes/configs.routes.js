// Routes of the Config REST endpoint

module.exports = (app) => {
    const configs = require('../controllers/config.controller.js');

    // Create a new Config
    app.post('/configs', configs.create);

    // Retrieve all configs
    app.get('/configs', configs.findAll);

    // Retrieve a single Config with configId
    app.get('/configs/:configId', configs.findOne);

    // Update a Config with configId
    app.put('/configs/:configId', configs.update);

    // Delete a Config with configId
    app.delete('/configs/:configId', configs.delete);
}
