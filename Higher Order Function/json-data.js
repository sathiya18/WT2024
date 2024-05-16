
import requests

api_key = "ab81ce7ea85e58a139e57e7b613cc7e6"
city = "India"
url = f"http://api.openweathermap.org/data/2.5/weather?q={city}&appid={api_key}&units=metric"

response = requests.get(url)
weather_data = response.json()

print(weather_data)