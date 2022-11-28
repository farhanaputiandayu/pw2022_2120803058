<?php

if (isset($_POST["submit"])) {
  if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    header("Location: admin.php");
    exit;
  } else {
    $error = true;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <style type="text/css">
    body {
      background-color: whitesmoke;
      font-family: 'Times New Roman', Times, serif;
    }

    h1 {
      text-align: center;
      font-size: 40px;
      color: black;
    }

    button {
      border-radius: 2px;
      padding: 10px;
      width: 120px;
      background-color: blue;
      border: none;
      color: #fff;
      font-weight: bold;
    }

    .isi {
      background-color: gray;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-left: 100px;
      margin-right: 100px;
      border-style: double;
    }
  </style>
</head>

<body>
  <center>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>


    <form action="" method="post" style="margin-top: 20px;">
      <div class="isi">
        <tr>
          <td><label for="username">
              Username :
              <input type="text" name="username" id="username"></td>
          </label>
          <br />
          <br />
          <td><label for="password">
              Password :
              <input type="password" name="password" id="password"></td>
          </label>
          <br />
          <br />
          <td><button type="submit" name="submit">Login</button></td>
        </tr>
      </div>
    </form>
  </center>


</body>

</html>