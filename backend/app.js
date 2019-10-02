import express from 'express'
import db from './app/dummy_db/db'

// Set up express app
const app = express()

// Set port the api should listen on
const port = 9000

// Get all EZCasts (Currently Dummy data)
app.get('/api/v1/ezcasts', (req, res) => {
	res.status(200).send({
		success: 'true',
		message: 'ezcasts retrieved successfully',
		ezcasts: db
	})
})

app.listen(port, () => {
	console.log('Server is now running API and listening on port ' + port)
})