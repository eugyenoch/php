<!DOCTYPE html>
<html>
<head><title>Contact us</title></head>

<body>

	<form method="POST" action="contact-us-send.php">
<label for="fullname">Name:</label><br />
<input type="text" name="fullname" id="fullname" /><br />

<label for="email">Email address:</label><br />
<input type="email" name="email" id="email" /><br />

<label for="subject">Subject:</label><br />
<input type="text" name="subject" id="subject" /><br />

<label for="comment">Comment</label><br />
<textarea name="comment" id="comment"></textarea><br />

<input type="submit" name="submit" value="Send" />
	</form>
</body>
</html>
