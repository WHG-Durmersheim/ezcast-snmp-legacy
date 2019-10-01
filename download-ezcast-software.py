import requests

url = "https://iezvu.com/upgrade/ota_rx.php"

headers = {
'Content-type': 'application/json; charset=utf-8',
}

print("Beginning the download of EZCast Firmware")
print("Please input the device you want to download the firmware for: ")

device_identifier = input()

print("Downloading the firmware for device: " + device_identifier)

data = '{\n\t"version": 1,\n\t"vendor": "' + device_identifier+ '",\n\t"mac_adress": "authorshxj",\n\t"softap_ssid": "000000-000000"\n\t"firmware_version": "0"\n}'


response = requests.post(url, headers=headers, data=data)

with open('./firmware.tar.gz', 'wb') as f:
	f.write(response.content)