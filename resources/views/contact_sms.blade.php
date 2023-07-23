<!DOCTYPE html>
<html>
<head>
  <title>Contact via SMS</title>
</head>
<body>

<h1>Contact via SMS</h1>

<form action="{{ route('send_sms') }}" method="post">
    @csrf
    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" id="phone_number" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea>

    <button type="submit">Send SMS</button>
</form>

</body>
</html>
