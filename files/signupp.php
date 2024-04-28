<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <link rel="stylesheet" href="form.css" />
    <title>Signup-form</title>
    <script src="formValidation.js" defer></script>
  </head>
  <body>
    <form action="signup.php" method="POST">
      <h1>Signup Form</h1>
      <section id="personal-details">
        <h2>Personal Details</h2>
        <ul>
          <li>
            <label for="fn">Full Name</label>
            <input
              type="text"
              id="fn"
              name="full-name"
              required
              maxlength="20"
            />
          </li>

          <li>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="date-of-birth" />
          </li>

          <li id="gender-box">
            <label for="m-sex"
              ><input type="radio" id="m-sex" name="sex" checked value="M"/> Male</label
            >
            <br />
            <label for="f-sex"
              ><input type="radio" id="f-sex" name="sex" value="F"/> Female</label
            >
          </li>
        </ul>
      </section>

      <section id="account-creation">
        <h2>Account Creation</h2>
        <ul>
          <li>
            <label for="dn">Display Name</label>
            <input type="text" id="dn"  name="display-name" />
          </li>

          <li>
            <label for="user-email">Email Address</label>
            <input type="email" id="user-email" name="user-email">
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1"  name="password" />
          </li>

          <li>
            <label for="pass2">Confirm Password</label>
            <input type="password" id="pass2"  />
          </li>
        </ul>
      </section>

      <section id="submission">
        <button type="button" onclick="validityCheck()">Create Account</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </section>
    </form>
  </body>
</html>
