<!doctype html>
<!--
@license
Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bower_components/material-design-lite/material.min.css">
  <script src="bower_components/material-design-lite/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="fullbleed">
<div class="header">
<!-- ლოგო -->
<div class="logo"><img src="images/logo.png"></div>
<!-- ახლადელი დრო -->
<div class="rd-box">
	<div class="rd-inner">
		<h2 class="t-sq" id="current">
      <a href="/worldclock/" title="The World Clock / Time Zones">თარიღი დრო</a>
    </h2>
    <a href="/worldclock/georgia/tskhinvali" id="clk_box" title="Current time in Tskhinvali">
      <span id="clk_hm"><?php date_default_timezone_set("Asia/Tbilisi");
echo date("G");?>:<?php date_default_timezone_set("Asia/Tbilisi");
echo date("i");?></span>
      <span id="clk_s">:<span id="ij0"><?php date_default_timezone_set("Asia/Tbilisi");
echo date("s");?></span></span>
      <span id="clk_am"></span><span id="clk_line"> </span>
    </a>
    <p><span id="ij1"><?php date_default_timezone_set("Asia/Tbilisi");
echo date("l");?></span><br><span id="ij2"><?php date_default_timezone_set("Asia/Tbilisi");
echo date("j");?> <?php date_default_timezone_set("Asia/Tbilisi");
echo date("F");?> <?php date_default_timezone_set("Asia/Tbilisi");
echo date("Y");?></span><br>
	</div>
</div>

<!-- ნავიგაციააა აააააქ  -->
  <div class="nav">
  <!-- Accent-colored raised button with ripple -->
  <a href="/"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">მთავარი</button></a>
  <a href="about-us.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">ჩვენს შესახებ</button></a>
  <a href="allcalc.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">კალკულატორები</button></a>
  <a href="converters.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">კონვერტერები</button></a>
  <a href="newuser.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">რეგისტრაცია/ავტორიზაცია</button></a>
  <a href="contact.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> კონტაქტი</button></a>
</div>
<!-- აქამდეეეეეეეეეეეეეეეეეეეეე -->



</div>
<div class="containermmm">
	

      <div>კონტენტის კონტენტი წავა ააააააქ ჰაჰაჰაჰაჰჰაჰა</div>





</div>
<div class="footer">
	<center><span id="footer">დიადი და დიდებული ავტორის ინფო წავა ააააააქ ჰაჰაჰაჰაჰაჰაჰ</span></center>
<div class="row">
  <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error natus maiores et placeat saepe modi soluta ipsa quisquam. Iste accusamus voluptatum dolorum odit aperiam facilis quam reprehenderit voluptatem praesentium eos.</div>
  <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque hic veniam veritatis iure autem fugiat ut ipsum eaque, ratione quibusdam, ipsam minima, quidem incidunt. Impedit qui nam, consectetur amet dolore!</div>
  <div class="col-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti illo provident recusandae sint accusantium. Iusto explicabo nostrum, dolorem eius ipsa, molestias ea nisi deserunt temporibus eveniet alias repellendus suscipit.</div>
</div>





</div>
<paper-button raised>თარიღის კალკულატორი</paper-button>




</body>
</html>
