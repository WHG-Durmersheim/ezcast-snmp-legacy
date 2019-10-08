const express = require('express')
const mongoose = require('mongoose')
const bodyParser = require('body-parser')

// Set up express app
const app = express()

// Set port the api should listen on
const port = 9000

mongoose.connect('mongodb://localhost:27017/ezcast-snmp', {
	useNewUrlParser: true,
	useUnifiedTopology: true
})
  .then(() => {
    console.log('mongodb started.');
    app.listen(port, () => {
	console.log('Server is now running API and listening on port ' + port)
	})
  }).catch(() => {
    console.log('Mongodb connection failed.');
  })
