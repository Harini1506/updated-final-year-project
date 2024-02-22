<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>email</title>
    <link rel="stylesheet" href="cmpy_reg_email.css" />
  </head>
  <body>
    <iframe
      src="nav.html"
      style="height: 290px; width: 100%; border: none"
    ></iframe>

    <form id="emailForm" action="cmpy_reg_email.php" method="post">
      <header>
        <h1>Contact Us</h1>
      </header>
      <label for="name">Name:</label><br />
      <input type="text" placeholder="Your name" name="name" />
      <br />
      <label for="email">Email:</label><br />
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Your Email Address"
        required
      /><br />
      <label for="subject">Subject:</label><br />
      <input type="text" name="subject" placeholder="Type your subject line" />
      <label for="message">Message:</label><br />
      <textarea
        id="message"
        name="message"
        placeholder="Type your Message Details Here..."
        required
      ></textarea
      ><br />
      <input type="submit" name="send" id="contact-submit"></input>
    </form>
  </body>
</html>
