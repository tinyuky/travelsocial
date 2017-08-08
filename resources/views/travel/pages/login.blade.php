<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="{!!asset('css/login.css')!!}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div id="advocacy" class="full-height">
    <div data-reactroot="">
      <div class="application">
        <div>
          <section class="basic-layout basic-layout--light login">
            <!-- <header class="basic-layout__header hidden-md-down">
            <a class="basic-layout__header__logo__image-container" href="http://www.filemaker.com/" target="_blank"><img src="//d2xivs3fz3ars4.cloudfront.net/filemaker/brand/logo-filemaker.png" role="presentation" class="basic-layout__header__logo__image"></a>
          </header> -->
          <main class="basic-layout__main">
            <div class="login__wrapper">
              <div class="login__wrapper__banner-ctn">
                <video class="login__wrapper__video" autoplay="" loop="" muted height="500px">
                  <source src="{!!asset('video/back.mp4')!!}" type="video/mp4">
                  </video>
                </div>
                <div class="login__content">
                  <div id="container">
                    <br>
                    <br>
                    <br>
                    <form>
                      <input type="email" name="email" placeholder="E-mail">
                      <input type="password" name="pass" placeholder="Password">
                      <a type="submit" href="#">Sign in</a>
                    </form>
                    <div class="singuplabel">
                      <a id="signuplink" class="signuplink" onclick="signup()">You don't have account?</a>
                    </div>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </main>
          </section>
        </div>
      </div>
    </div>
  </div>
  <script src="{!!asset('js/login.js')!!}" type="text/javascript"></script>
</body>
</html>
