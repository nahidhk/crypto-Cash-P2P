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

        echo "<script>window.location.href='/user/login.asp'</script>";
      }
    } else {
      echo "<script>window.location.href='/user/login.asp'</script>";
    }
  } else {


    echo "<script>window.location.href='/user/singup.asp'</script>";
  }
} else {

  echo "<script>window.location.href='/user/login.asp'</script>";
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

      <span class="title">Profile </span>
    </blockquote>

    <span onclick="myappclose()" class="usericon">
      <i class="bi bi-x-lg"></i>
    </span>
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
  <section>
    <center>
      <div class="btn-box">
        <button id="sellbtn" onclick="sell()" class="btnn btn2 active2">Sell</button>
        <button id="buybtn" onclick="buy()" class="btnn btn1">Buy</button>

      </div>

    </center>

  </section>


  <!-- custom data appp -->
  <section class="pricing-plans">
      <div class="pricing-card basic">
        <div class="heading">
          <h4>Sell Crypto</h4>
          <p>for USD crypto sell</p>
        </div>
        <p class="price">
          $1 > <span id="isell"></span>
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
        <button onclick="login()" class="cta-btn">Sell</button>

      </div>
      <!-- buy card -->
      <div class="pricing-card standard">
        <div class="heading">
          <h4> BUY</h4>
          <p>for USD crypto sell</p>
        </div>
        <p class="price">
          $1 > <span id="ibuy"></span>
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

















  <!-- The buy opstion -->
  <section class="vcc" id="buy">
    <blockquote>
      <h2>
        The Crypto Buy
        <hr>
      </h2>

      <center>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla tenetur cumque iste perspiciatis eum quas quisquam, minus voluptates pariatur impedit atque at in deserunt architecto dolores corrupti ex recusandae porro obcaecati dolor eos corporis. Facilis, consequuntur ducimus expedita inventore a asperiores molestias facere, nostrum provident rem veniam accusantium eaque! Quas?
        </p>
        <div class="price-box">
          <span class="contxt">Today Crypto Buy Price </span><br><br>

          <span class="showtxt">1USDT > <span id="buyprice"></span>BDT</span>
          <br><br>
        </div>
        <br><br>
        <p>You have buy munuman 1 USDT </p>
        <button class="btn">Buy Now</button>
        <br><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
          <path d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916z" />
        </svg>
        <br>

      </center>
    </blockquote>
  </section>


  <!-- sell crytpo -->

  <section id="sell">
    <blockquote>
      <h2>
        The Crypto sell
        <hr>
      </h2>

      <center>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla tenetur cumque iste perspiciatis eum quas quisquam, minus voluptates pariatur impedit atque at in deserunt architecto dolores corrupti ex recusandae porro obcaecati dolor eos corporis. Facilis, consequuntur ducimus expedita inventore a asperiores molestias facere, nostrum provident rem veniam accusantium eaque! Quas?
        </p>
        <div class="price-box">
          <span class="contxt">Today Crypto sell Price </span><br><br>

          <span class="showtxt">1USDT > <span id="sellprice"></span>BDT</span>
          <br><br>
        </div>
        <br><br>
        <p>You have buy munuman 1 USDT </p>
        <button onclick="sellbtn()" class="btn">sell Now</button>
        <br><br><br>

        <table>
          <tr>
            <th>Sell</th>
            <th>pre $ fees</th>
            <th>fees</th>
            <th>limet</th>
          </tr>
          <tr>
            <td>100$</td>
            <td>0.01$</td>
            <td>1$</td>
            <td>150$</td>
          </tr>
          <tr>
            <td>200$</td>
            <td>0.03$</td>
            <td>6$</td>
            <td>250$</td>
          </tr>
          <tr>
            <td>500$</td>
            <td>0.04$</td>
            <td>20$</td>
            <td>1000$</td>
          </tr>
        </table>
      </center>
    </blockquote>
  </section>

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
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/662b41151ec1082f04e72d79/1hscfcff4';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

<script src="/tilt.js"></script>
</body>

</html>