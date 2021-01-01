The Data Deletion Request callback that you implement must do the following:

Initiate the deletion of any data your app has from Facebook about the user.
Return a JSON response that contains a URL where the user can check the status of their deletion request and an alphanumeric confirmation code. The JSON response has the following form:
{ url: '<url>', confirmation_code: '<code>' }