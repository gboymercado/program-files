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
  <title>Computer Force | About</title>
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
        <h1 class="pageTitle centerText">About Computer Force</h1>
        <p class="description">Computer Force is a brand-new start-up company designed to provide first- class service to its customers. Based in Parramatta in Sydney, Computer Force provides top class computing products at bargain prices, for sale throughout Australia.</p>

        <article class="goals">
          <h2>Our goals are:</h2>
          <ul>
            <li>To become Australia’s most well-known and respected hardware and software provider</li>
            <li>To create a service-based organisation whose goal is to exceed customer's expectations</li>
            <li>To provide a smooth, efficient, and transparent sales process</li>
            <li>You can contact us using the following methods:
              <ul>
                <li>Address: 100 Main Road, Parramatta, NSW 20150</li>
                <li>Email: info@computerforce.com.au</li>
                <li>Phone: 02 4444 5555</li>
              </ul>
            </li>
          </ul>
        </article>

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
