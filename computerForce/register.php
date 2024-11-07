<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/c0c1ac414c.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/template.js"></script>
  <link rel="icon" href="images/iconComputerForce.ico">
  <link rel="stylesheet" href="css/template.css">
  <link rel="stylesheet" href="css/hamburgerMenu.css">
  <link rel="stylesheet" href="css/bag.css">
  <link rel="stylesheet" href="css/content.css">
  <title>Computer Force | Register</title>
</head>
<body>
  <div class="container">
    <header>
      <div class="mobileMenuContainer">
        <input type="checkbox" class="toggler">
        <div class="mobileButtonStyle hamburger perfectCenter"><div></div></div>
        <div class="modal mobileMenu">
          <ul>
          <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="about.php">About</a></li>
            <li>
              <form class="formSearch">
                <input type="text" placeholder="Enter keyword">
                <input type="button" value="&#xf002;">
              </form>
            </li>
            <li><img id="logo" src="images/loss.png" alt="Image Not Loaded"></li>
          </ul>
        </div><!-- <div class="menu"> -->
      </div>  <!-- <div class="mobileMenuContainer"> -->
      <a href="index.php">
        <img id="logo" src="images/loss.png" alt="Image Not Loaded">
      </a>
      <div class="mobileAsideContainer">
        <input type="checkbox" class="toggler">
        <div class="mobileButtonStyle"></div>
        <div class="modal perfectCenter mobileAsideContent">
          <div class="purchasesContainer">
            <h2 class="purchases">Purchases</h2>
            <table>
              <tr>
                <th>Item</th>
                <th>Price</th>
              </tr>
              <tr>
                <td>Test Item 1</td>
                <td>$1000</td>
              </tr>
              <tr>
                <td>Test Item 2</td>
                <td>$500</td>
              </tr>
              <tr>
                <td class="total">Total</td>
                <td class="total">$1500</td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="button" name="button" value="Go to Checkout">
                </td>
              </tr>
            </table>
          </div><!-- <div class="purchasesContainer"> -->
        </div><!-- <div class="modal perfectCenter mobileAsideContent"> -->
      </div><!-- <div class="mobileAsideContainer"> -->
    </header>
    <nav>
      <ul>
      <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Products</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <form class="formSearch">
        <input type="text" placeholder="Enter keyword">
        <input type="button" value="&#xf002;">
      </form>
    </nav>
    <main>
      <section>
        <h1 class="pageTitle centerText">Registration Form</h1>
        <p class="centerText">Please complete the following form to register for an account on our website.</p>

        <form class="registrationForm" name="registrationForm" action="processes/processRegisterCustomer.php" method="post" onsubmit="return validateRegistrationForm()">
          <div class="inputGroup">
            <label for="username">Username<sup>*</sup>:</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="inputGroup">
            <label for="emailAddress">Email Address<sup>*</sup>:</label>
            <input type="email" id="emailAddress" name="emailAddress" required>
          </div>
          <div class="inputGroup">
            <label for="password">Password<sup>*</sup>:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="inputGroup">
            <label for="confirmPassword">Confirm Password<sup>*</sup>:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </div>
          <div class="inputGroup">
            <label for="firstName">First Name<sup>*</sup>:</label>
            <input type="text" id="firstName" name="firstName" required>
          </div>
          <div class="inputGroup">
            <label for="surname">Surname<sup>*</sup>:</label>
            <input type="text" id="surname" name="surname" required>
          </div>
          <div class="inputGroup">
            <p>Gender<sup>*</sup>:</p>
            <div class="radioGender">
              <input type="radio" id="male" name="gender" value="male" required><label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female" required><label for="female">female</label>
            </div>
          </div>
          <div class="inputGroup">
            <label for="dateOfBirth">Date of Birth</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth">
          </div>
          <div class="inputGroup">
            <label for="address">Address<sup>*</sup>:</label>
            <input type="text" id="address" name="address" required>
          </div>
          <div class="inputGroup">
            <label for="suburb">Suburb<sup>*</sup>:</label>
            <input type="text" id="suburb" name="suburb" required>
          </div>
          <div class="inputGroup">
            <label for="postcode">Postcode<sup>*</sup>:</label>
            <input type="text" id="postcode" name="postcode" required>
          </div>
          <div class="inputGroup">
            <label for="state">State<sup>*</sup>:</label>
            <input type="text" id="state" name="state" required>
          </div>
          <div class="inputGroup">
            <label for="phoneNumber">Phone number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber">
          </div>
          <input type="button" value="Clear" onclick="clearRegistrationForm()">
          <input type="submit" name="register" value="Register">
        </form>

      </section>
      <aside>
        <div class="purchasesContainer">
          <h2 class="purchases">Purchases</h2>
          <table>
            <tr>
              <th>Item</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Test Item 1</td>
              <td>$1000</td>
            </tr>
            <tr>
              <td>Test Item 2</td>
              <td>$500</td>
            </tr>
            <tr>
              <td class="total">Total</td>
              <td class="total">$1500</td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="button" name="button" value="Go to Checkout">
              </td>
            </tr>
          </table>
        </div><!-- <div class="purchasesContainer"> -->
      </aside>
    </main>
    <footer>
    <div class="footer-logo">
    <a href="index.php">
        <img id="logo" src="images/loss.png" alt="Image Not Loaded">
      </a>
    </div>
    <div class="footer-text">
      <p>&copy;<span id="currentYear"></span> Rex Jan Bev Mercado All rights reserved</p>
      <a href="privacyPolicy.php" target="_blank">Privacy Policy</a>
      </div>
    </footer>
  </div><!-- <div class="container"> -->
  <script type="text/javascript">
       document.querySelector("#currentYear").innerHTML = getCurrentYear();
  </script>
</body>
</html>
