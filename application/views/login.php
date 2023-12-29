<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Finance Mobile Application-UX/UI Design Screen One</title>
    
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="style.css">

</head>
<body>

</nav>
    <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo"Login gagal! Password dan username anda salah";
        }else if($_GET['pesan'] == "Logout"){
          echo"Anda telah Logout!";
        }
        else if($_GET['pesan'] == "belum_login"){
          echo"Anda harus login untuk mengakses halaman";
        }
      }
    ?>
    <table>
        <tr>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
             <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="image/logo.png" height="40px" width="50px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="http://localhost/Codeigniter/">codeigniter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Paket</a>
        </li>
        </ul>
  </div>
  <button type="button" class="btn btn-dark btn-secondary btn-lg"><a href="http://localhost/Codeigniter/index.php/login">Sign In</a></button>
        </tr>
        <tr>
          <style type="text/css">         
          * {
              font-family: "Poppins";
            }
            table {
              -webkit-user-select: none;
                -moz-user-select: none;
                  -ms-user-select: none;
                      user-select: none;
              overflow-y: hidden;
              display: flex;
              justify-content: center;
              align-items: center;
              background: #dde5f4;
              height: 100vh;
            }
            
            .screen-1 {
              background: #f1f7fe;
              padding: 1em;
              display: flex;
              flex-direction: column;
              border-radius: 30px;
              box-shadow: 0 0 2em #e6e9f9;
              gap: 1em;
            }

            .screen-1 .email {
              background: white;
              box-shadow: 0 0 2em #e6e9f9;
              padding: 1em;
              display: flex;
              flex-direction: column;
              gap: 0.5em;
              border-radius: 20px;
              color: #4d4d4d;
              margin-top: 1em;
            }
            .screen-1 .email input {
              outline: none;
              border: none;
            }
            .screen-1 .email input::-moz-placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .email input:-ms-input-placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .email input::placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .email ion-icon {
              color: #4d4d4d;
              margin-bottom: -0.2em;
            }
            .screen-1 .password {
              background: white;
              box-shadow: 0 0 2em #e6e9f9;
              padding: 1em;
              display: flex;
              flex-direction: column;
              gap: 0.5em;
              border-radius: 20px;
              color: #4d4d4d;
            }
            .screen-1 .password input {
              outline: none;
              border: none;
            }
            .screen-1 .password input::-moz-placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .password input:-ms-input-placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .password input::placeholder {
              color: black;
              font-size: 0.9em;
            }
            .screen-1 .password ion-icon {
              color: #4d4d4d;
              margin-bottom: -0.2em;
            }
            .screen-1 .password .show-hide {
              margin-right: -5em;
            }
            .screen-1 .login {
              padding: 1em;
              background: #3e4684;
              color: white;
              border: none;
              border-radius: 30px;
              font-weight: 600;
            }
            .screen-1 .footer {
              display: flex;
              font-size: 0.7em;
              color: #5e5e5e;
              gap: 14em;
              padding-bottom: 10em;
            }
            .screen-1 .footer span {
              cursor: pointer;
            }
            
            button {
              cursor: pointer;
            }
          </style>
        <td class="sc-1">
          <form action="http://localhost/Codeigniter/" method="post">
          <div class="screen-1">
          <h2>
            Sign In
          </h2>
          <div class="email">
            <label for="email">Email Address</label>
            <div class="sec-2">
              <ion-icon name="mail-outline"></ion-icon>
              <input type="email" name="email" placeholder="Username@gmail.com"/>
            </div>
          </div>
          <div class="password">
            <label for="password">Password</label>
            <div class="sec-2">
              <ion-icon name="lock-closed-outline"></ion-icon>
              <input class="pas" type="password" name="password" placeholder="············"/>
              <ion-icon class="show-hide" name="eye-outline"></ion-icon>
            </div>
          </div>
          <button class="login"><input type="submit" style="background-color: #3e4684; border:0px; color: white;" value="Login"></button>
          <div class="footer"><span><a href="#">Sign Up</a></span><span><a href="#">Forgot Password?</a></span></div>
            </div>
          </form>
        </td>
        </tr> 
    </table>
</body>
</html>
