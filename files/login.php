<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Grotesk:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="form.css" />
    <title>Login-Form</title>
  </head>
  <body>
    <form action="loginConfirmation.php" method="POST">
      <h1>Login Form</h1>
    
      <section id="account-creation">
        <h2>Enter your credentials</h2>
        <ul>
          <li>
            <label for="dn">Email Address</label>
            <input type="email" id="dn" name="user-email" />
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1" name="pass" />
          </li>

        </ul>
      </section>

      <section id="submission">
        <button type="submit">Log In</button>
        <p>Don't have an account? <a href="signupp.php">Sign up</a></p>
      </section>
    </form>
  </body>
</html>
