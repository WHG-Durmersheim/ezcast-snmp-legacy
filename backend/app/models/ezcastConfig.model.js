const mongoose = require('mongoose');

const ezcastConfigSchema = mongoose.Schema({
	id: Number,
	name: String,
	room: String,
	wifiPassword: String,
	hideSSID: Boolean,
	streamingSettings: Boolean,
	deviceLanguage: Number,
	outputResolution: Number,
	maximumSimultaneousClients: Number,
	castcodeSetting: Number,
	internetAccessControl: Number,
	hidePassword: Boolean,
	routerOrDirectOnly: Number,
	otaURL: String,
})

module.exports = mongoose.model('ezcastConfig', ezcastSchema);