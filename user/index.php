<?php
if (isset($_GET['email'])) {
  $email = $_GET['email'];
  $jsonFilePath = $email . '.json';

  if (file_exists($jsonFilePath)) {
    $jsonData = file_get_contents($jsonFilePath);

    if ($jsonData !== false) {

      $decodedData = json_decode($jsonData, true);

      if ($decodedData !== null) {



?>


<?php
      } else {

        echo "<script>window.location.href='/user/login.html'</script>";
      }
    } else {
      echo "<script>window.location.href='/user/login.html'</script>";
    }
  } else {


    echo "<script>window.location.href='/user/singup.html'</script>";
  }
} else {

  echo "<script>window.location.href='/user/login.html'</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="manifest" href="/manifest.json">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/card.css">
  <link rel="shortcut icon" type="image/x-icon" href="/img/lite.jpg">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypto Cash P2P - <?php echo $decodedData['username'] ?></title>
  <link rel="stylesheet" href="userstyle.css">
</head>

<body onscroll="scrolll()" class="bodyy">





  <section class="nav">
    <div>

      <span id="menu" onclick="menu()" class="icon menu app1">
        <i class="bi bi-list"></i>
      </span>
      <span id="close" onclick="closed()" class="icon menu app2">
        <i class="bi bi-x-lg"></i>
      </span>
    </div>
    <center>

      <div style="cursor: pointer;" id="navimg" class="img-box myani">
        <img src="/img/bg.png">

      </div>

    </center>
    <div class="loginbtnbox">
      <button title="Duble click to open profile" style="font-size:30px" onclick="profile()" class="btn">
        <i class="bi bi-person-circle"></i>
      </button>
    </div>
  </section>

  <!-- load a new menu box data  -->


  <section id="list-box" class="list-box">
    <blockquote>
      <!-- sell button -->
      <p onclick="sell()" class="app">
        <i class="bi bi-bag-check"></i>

        &nbsp; Sell
      </p>
      <!-- buy button -->
      <p onclick="buy()" class="app">
        <i class="bi bi-bag"></i>

        &nbsp; Buy
      </p>
      <!-- history button -->

      <p onclick="history()" class="app">
        <i class="bi bi-clock-history"></i>

        &nbsp; History
      </p>
      <!-- setting -->
      <p onclick="setting()" class="app">
        <i class="bi bi-gear-wide"></i>

        &nbsp; Setting
      </p>
      <!-- Profile -->
      <p title="Duble click to open profile" onclick="profile()" class="app">
        <i class="bi bi-person-lines-fill"></i>

        &nbsp; Profile
      </p>
      <!-- Giveaway -->

      <p onclick="giveaway()" class="app">
        <i class="bi bi-gift"></i>

        &nbsp; Giveaway
      </p>

      <!-- logout button  -->
      <p onclick="logout()" class="app">
        <i class="bi bi-box-arrow-left"></i>
        &nbsp; Logout
      </p>


    </blockquote>
  </section>




  <!-- the new data -->

  <br><br>
  <section class="main-box">
    <center>
      <!-- box 1 -->
      <div class="box1">
        <marquee>Crypto Cash P2P Here you can convert your USD into Bangladeshi Taka and it will reach you through a digital transaction system.
          And you can easily bring it in your hands.
          Not only that, from here you can buy dollars from us at budget prices with your money.
          So all this information is kept from Telegram bot calledb <a href="https://t.me/Cryptocashp2p_bot">Telegram bot</a>.
          You can easily login or signup here.</marquee>
      </div>
      <br>
      <!-- box2 -->
      <div class="box2">
        <span>Hello , <?php echo $decodedData['username'] ?></span>
      </div>
    </center>
  </section>
  <!-- profile  -->

  <section id="profile" class="profile vcc">
    <blockquote>


      <br>

      <button onclick="profile()" class="btn">
        <i class="bi bi-x-lg icon"></i>
      </button><br>
      <blockquote>
        <span class="title">Profile </span>
      </blockquote>

    </blockquote>

    <br>
    <center>

      <img height="100" src="/img/user.png" alt="usericon">
      <h1> <?php echo $decodedData['username'] ?></h1>
      <p>Email: <?php echo $decodedData['email'] ?></p>

    </center>
    <p>
    <blockquote style="color:#ff0000;font-size: 24px;">
      <p>User Id : <span id="loc"></span> </p>
      <p>Country : <span id="country"></span></p>
      <p>City : <span id="city"></span> </p>
      <p>post code : <span id="postal"></span></p>
      <p>Divison : <span id="division"> </span></p>
    </blockquote>
    <br><br><br><br>
    <center>
      <p><i>copyright &copy; ip:<span id="ip"> </span></i></p>
    </center>
  </section>

  <br><br>


  <!-- custom data appp -->
  <section class="pricing-plans">
    <div class="pricing-card basic">
      <div class="heading">
        <h4>Sell Crypto</h4>
        <p>for USD crypto sell</p>
      </div>
      <p class="price">
        $1 > <span id="asell"></span>
        <sub>/BDT</sub>
      </p>
      <ul class="features">
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>Binance</strong> Pay ID
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>BEP20</strong> BNB Smart Chain
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>Polygon</strong>
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>EOS</strong>
        </li>

        <li>
          <i class="fa-solid fa-check"></i>
          <strong>24/7</strong> support
        </li>
      </ul>
      <button onclick="sell()" class="cta-btn">Sell</button>

    </div>
    <!-- buy card -->
    <div class="pricing-card standard">
      <div class="heading">
        <h4> BUY</h4>
        <p>for USD crypto sell</p>
      </div>
      <p class="price">
        $1 > <span id="abuy"></span>
        <sub>/BDT</sub>
      </p>
      <ul class="features">
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>Binance</strong> Pay ID
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>BEP20</strong> BNB Smart Chain
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>Polygon</strong>
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          <strong>EOS</strong>
        </li>

        <li>
          <i class="fa-solid fa-check"></i>
          <strong>24/7</strong> support
        </li>
      </ul>
      <button onclick="login()" class="cta-btn">buy</button>
    </div>

  </section>
  <!-- end  data -->

<br><br>
  <section style="  justify-content: center;
align-items: center;">
      <center>
        <div class="marquee">
          <ul class="marquee-content">
            <li><img src="https://cryptologos.cc/logos/binance-usd-busd-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/ethereum-eth-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/tether-usdt-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/bnb-bnb-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/tron-trx-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/bnb-bnb-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/kucoin-token-kcs-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/polygon-matic-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/shiba-inu-shib-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/dogecoin-doge-logo.svg?v=031" /></li>
            <li><img src="https://cryptologos.cc/logos/bitcoin-btc-logo.svg?v=031" /></li>
          </ul>
        </div>
      </center>
    </section>


    <br><br>


 

<br><br>
<footer class="foter">
  <blockquote>
    <h1>Cryptocashp2p</h1>
    <p>
<a class="icon" href="#" onclick="telegram()"> <i class="bi bi-telegram"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="icon" href="#" onclick="github()"> <i class="bi bi-github"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="icon" href="#" onclick="tx()"> <i class="bi bi-twitter-x"></i> </a>
    </p> Customer Care : +880 9638631634<br>
    <samp>&copy;Cryptocashp2p - 2024</samp>
  </blockquote>
  </footer>










  <!-- the app -->
  <script>
    sessionStorage.setItem("mobile", "<?php echo $decodedData['mobile'] ?>");
    sessionStorage.setItem("username", "<?php echo $decodedData['username'] ?>");
    sessionStorage.setItem("email", "<?php echo $decodedData['email'] ?>");
    sessionStorage.setItem("password", "<?php echo $decodedData['password'] ?>");
  </script>
  <script src="manuser.js"></script>
  <script src="myscript.js"></script>
  <script src="login.js"></script>
  <script src="ipdata.js"></script>
  <script src="/app.js"></script>
 
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/662b41151ec1082f04e72d79/1hscfcff4';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

  <script src="/tilt.js"></script>
  <script src="notojs.js"></script>
</body>

</html>