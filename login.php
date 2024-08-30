<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
  <title>Document</title>
</head>

<body class="bg-dark">
  <div class="login">
    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="POST" action="./app/validate-login.php">
      <div class="row align-items-center">
        <p class="text-center fs-4" >Login to your account</p>
      </div>
      <hr class="my-4">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
    </form>
  </div>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>