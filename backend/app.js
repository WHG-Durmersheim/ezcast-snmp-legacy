const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')

import db from './app/dummy_db/db'

// Set up express app
const app = express()

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
		message: 'No errors in backend detected.',
		version: '0.0.1'
	})
})

mongoose.connect('mongodb://localhost:27017/ezcast-snmp')
  .then(() => {
    console.log('mongodb started.');
    app.listen(port, () => {
	console.log('Server is now running API and listening on port ' + port)
	})
  }).catch(() => {
    console.log('Mongodb connection failed.');
  })

