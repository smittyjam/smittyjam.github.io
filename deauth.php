People are able to uninstall apps via Facebook.com without interacting with the app itself. To help apps detect when this has happened, we allow them to provide a de-authorize callback URL which will be pinged whenever this occurs.

You can enable a deauthorize callback through the App Dashboard. Just go to your app, then choose the Products, then Facebook Login, and finally Settings. A text field is provided for the Deauthorize Callback URL.

Whenever a user of your app de-authorizes it, this URL will be sent an HTTP POST containing a signed request. Read our guide to parsing the signed request to see how to decode this to find out the user ID that triggered the callback.