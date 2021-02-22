<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lab5</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="logo" onclick="window.location.reload()">
        <img id= "logo" onclick="load()"src="https://www.vectorlogo.zone/logos/java/java-icon.svg" width="45px" alt="logo"></div>
      <div id="Coffee" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">Coffee</div>
      <div id="Order_Online" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">Order Online</div>
      <div id="About_Us" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">About Us</div>
      <div id="Contacts" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">Contacts</div>
      </div>
      <div class="photo">
        <img id="img" src="Чашка кофе.png" height="250px" alt="Coffee">
      </div>
      <div class="text">
        <h1 id="text1">Welcome to our <br>coffee shop!</h1>
        <p id="text2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Commodi accusantium repellat molestias. Tempora quod<br>animi voluptatem fugit tempore obcaecati quos amet labore<br>dolorum quae. Ut id animi nesciunt pariatur reprehenderit</p>
      </div>
      <script type="text/javascript" src="script.js"></script>
  </body>
</html>
