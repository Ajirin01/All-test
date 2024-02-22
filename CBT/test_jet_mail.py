from mailjet_rest import Client
import os
api_key = 'f5a2d9fb2f17bbab267c1acfff00d490'
api_secret = 'd8acd339ff7cc9c8fbef29c3435ab14f'
mailjet = Client(auth=(api_key, api_secret), version='v3.1')
data = {
  'Messages': [
    {
      "From": {
        "Email": "mubarakolagoke@gmail.com",
        "Name": "Olagoke"
      },
      "To": [
        {
          "Email": "mubarakolagoke@gmail.com",
          "Name": "Olagoke"
        }
      ],
      "Subject": "Greetings from Mailjet.",
      "TextPart": "My first Mailjet email",
      "HTMLPart": "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
      "CustomID": "AppGettingStartedTest"
    }
  ]
}
result = mailjet.send.create(data=data)
print(result.status_code)
print(result.json())
