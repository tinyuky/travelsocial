<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/login3.css" rel="stylesheet">
  <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
  <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
  <style>
  .fa-heart{
    color: #F74933;
  }
  .space-100{
    height: 100px;
    display: block;
  }
  pre.prettyprint{
    background-color: #ffffff;
    border: 1px solid #999;
    margin-top: 20px;
    padding: 20px;
    text-align: left;
  }
  .atv, .str{
    color: #05AE0E;
  }
  .tag, .pln, .kwd{
    color: #3472F7;
  }
  .atn{
    color: #2C93FF;
  }
  .pln{
    color: #333;
  }
  .com{
    color: #999;
  }
  </style>
</head>
<body>
  <div id="navbar-full">
    <div id="navbar">
      <!--
      navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
    -->
    <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">

      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-brand-logo">
            <div class="logo">
              <img src="{{asset('images/1.jpg')}}" height="50px" width="60px">
            </div>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a id="accountele" href="" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-ticket"></i>
                <p>Test</p>
              </a>
              <ul id="login-dp" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a id="accountele" href="" class="dropdown-toggle" data-toggle="dropdown">
                <i class="pe-7s-user"></i>
                <p>Account</p>
              </a>
              <ul id="login-dp" class="dropdown-menu">
                <li>
                  <div class="row 1">
                    <div class="col-md-12">
                      <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="logup-nav">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Password</label>
                          <input type="email" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                        </div>
                      </form>
                    </div>
                    <div id="signuplink" class="bottom text-center" onmousemove="joinusfuction()" style="color:white" >If you had a account</div>
                    <script type="text/javascript">
                    function joinusfuction(){
                      var text = $('#signuplink').text();
                      if(text=="If you had a account"){
                        $( "<br>" ).insertAfter( ".1" );
                        $( "<br>" ).insertAfter( ".1" );
                        $('#login-nav').append("<div class='form-group'><label class='sr-only' for='exampleInputEmail2'>Email address</label><input type='email' class='form-control' placeholder='Email address' required></div>");
                        $('#login-nav').append("<div class='form-group'><label class='sr-only' for='exampleInputPassword2'>Password</label><input type='password' class='form-control' placeholder='Password' required><div class='checkbox inline'><label><input type='checkbox'> Keep my account</label></div><!-- <div class='help-block text-right inline'><a href=''>Forget the password ?</a></div> --></div>");
                        $('#login-nav').append("<div class='form-group'><button type='submit' class='btn btn-primary btn-block'>Sign in</button></div>");
                        // $("<div id='signuplink' class='bottom text-center' onmousemove='joinusfuction()'' ></div>").insertAfter(".second");
                        $('#signuplink').remove();
                      }
                    };
                    </script>
                  </div>
                  <div class="row">
                    <div class="col-md-12 second">
                      <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right navbar-search-form" role="search">
            <div class="form-group">
              <input type="text" value="" class="form-control" placeholder="Search...">
            </div>
          </form>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="blurred-container">
      <div class="img-src" style="background-image: url('images/bg.jpg')"></div>
    </div>
  </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->


<script src="js/bootstrap.min.js"></script>
</body>
</html>
