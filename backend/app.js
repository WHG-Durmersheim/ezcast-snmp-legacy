const express = require('express')
const bodyParser = require('body-parser')

import db from './app/dummy_db/db'

// Set up express app
const app = express()

// parse requests of content-type - application/x-www-form-urlencoded
// app.use(bodyParser.urlencoded({ extended: true }))

// Configuring the database
// const dbConfig = require('./app/config/database.config.js');
// const mongoose = require('mongoose');

// mongoose.Promise = global.Promise;

// Connecting to the database
// mongoose.connect(dbConfig.url, {
//     useNewUrlParser: true
// }).then(() => {
//     console.log("Successfully connected to the database");    
// }).catch(err => {
//     console.log('Could not connect to the database. Exiting now...', err);
//     process.exit();
// });

// Set port the api should listen on
const port = 9000

// Get all EZCasts (Currently Dummy data)
app.get('/api/v1/ezcasts', (req, res) => {
	res.setHeader('Access-Control-Allow-Origin', '*')
	res.status(200).send({
		success: 'true',
		message: 'ezcasts retrieved successfully',
		ezcasts: db
	})
})

// Get version of Backend
app.get('/api/v1/status', (req, res) => {
	res.status(200).send({
		success: true,
		message: 'No errors in backend detected.'
		version: '0.0.1'
	})
})

app.listen(port, () => {
	console.log('Server is now running API and listening on port ' + port)
})