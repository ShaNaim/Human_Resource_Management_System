<?php
session_start();
$loginError = "";
if (isset($_GET['q'])) {
  $loginError = "Incorrect Username And Password ";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="css/Login.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
  <form action="php/Login.php" method="POST" class="login-form">
    <h1>Welcome</h1>
    <h6>Sign In with Your Organizational Id and Password</h6>
    <h4 class="login-error"> <?php echo $loginError; ?> </h4>
    <div class="txtb">
      <input type="text" name="userName" required />
      <span data-placeholder="Username"></span>
    </div>

    <div class="txtb">
      <input type="password" name="password" required />
      <span data-placeholder="Password"></span>
    </div>

    <input type="submit" class="logbtn" value="Login" />

    <div class="bottom-text">
      <a href="Dashboard.html"> Can't Login ? Contact Authority </a>
    </div>

    <div class="bottom-text">
      <a href="Index.html"> Index </a>
    </div>
  </form>

  <script type="text/javascript">
    $(".txtb input").on("focus", function() {
      $(this).addClass("focus");
    });

    $(".txtb input").on("blur", function() {
      if ($(this).val() == "") $(this).removeClass("focus");
    });
  </script>
</body>

</html>