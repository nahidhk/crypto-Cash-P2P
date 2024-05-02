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
  <title>Crypto Cash P2P login</title>
</head>

<body>
  <section class="bgimg">
    <div class="boxgd">
      <blockquote>


        <h1 class="h1">Login Here</h1>

        <form onsubmit="logapp()" action="login.php" method="post">

          <div class="form__group field">
            <input type="email" class="form__field" placeholder="Email" name="email" id='email' required />
            <label for="email" class="form__label">Email</label>
          </div><br>
          <div class="form__group field">
            <input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
            <label for="password" class="form__label">Password</label>
          </div> <br><br>
          <center>
            <button type="submit" class="btn">
              Login
            </button>
            <a href="singup.asp">Singup</a>
            <a href="forget.asp">Forget Password</a>
          </center>
      </blockquote>

      </form>

    </div>
  </section>
</body>

</html>