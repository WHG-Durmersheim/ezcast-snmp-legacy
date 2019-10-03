const mongoose = require('mongoose');

const ezcastSchema = mongoose.Schema({
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
	wlan0MAC: String,
	wlan0IP: String,
	wlan0status: String,
	wlan1MAC: String,
	wlan1IP: String,
	wlan1status: String,
	wlan2MAC: String,
	wlan2IP: String,
	wlan2status: String,
	wlan3MAC: String,
	wlan3IP: String,
	wlan3status: String,
	lanMAC: String,
	lanIP: String,
	lanStatus: String,
	firmwareVersion: String,
	latestVersionAvailable: String,
	numberOfLoggedInUsers: Number,
	internetConnectionStatus: Boolean
}, {
	timestamps: false
})

module.exports = mongoose.model('ezcast', ezcastSchema);