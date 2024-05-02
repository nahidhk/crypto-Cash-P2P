<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="btn.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="manifest" href="manifest.json">
  <link rel="shortcut icon" type="image/x-icon" href="/img/lite.jpg">
  <link rel="stylesheet" href="login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crypto Cash P2P singup</title>
</head>

<body>

  <section class="bgimg">
    <div class="boxgd">
    <blockquote>
      <form action="singup.php" method="post">

        <h1>Singup</h1>

        <div class="form__group field">

        <input class="form__field" type="email" name="email" value="" placeholder="Enter A valid Email" required />

        <label class="form__label" for="email">Email</label>
</div>
<div class="form__group field">
        <input class="form__field" type="username" name="username" id="username" pl value=""
          placeholder="Username" required />

        <label class="form__label" for="username">Full Name</label><br>
</div>
<div class="form__group field">    
        <input class="form__field" type="number" name="mobile" id="mobile" value="" placeholder="'BD'+88 "
          required />

        <label class="form__label" for="mobile">Mobile</label><br>
</div>
      
<div class="form__group field">
        <input class="form__field" type="password" name="password" value="" placeholder="Enter" required />

        <label class="form__label" for="password">Password</label><br>

      </div>
        <br><br>
        <center>

          <button class="btn" type="submit">Singup</button>
       
          <a href="login.asp">Login</a>
        </center>
      </form>

    </blockquote>

</div>
  </section>



  <script src="login.js"></script>
</body>

</html>