<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
<?php include 'header.php' ?>

<div class="navbar">
 <br> <br>
  <a href="#">Course-1</a>
  <a href="#">Course-2</a>
  <a href="#">Course-3</a>
  <a href="#">Course-4</a>
  <a href="#">Course-5</a>
  <a href="#">Course-6</a>
  <a href="#">Course-7</a>
  <a href="index.php" class="right">Logout</a>
  <a href="register.html" class="right">Register</a>
</div>

<div class="row">
  <div class="side">
    <h2 id="courseTitle">Course topics</h2>
    <ul style="list-style-type:none;" class="topics">
      <li><a href="#"> topic 1</a></li>
      <li> <a href="#"> topic 2</a></li>
      <li><a href="#">topic 3</a> </li>
      <li><a href="#">topic 4</a></li>
      <li><a href="#">topic 5</a></li>
      <li><a href="#">topic 6</a></li>
      <li><a href="#">topic 7</a></li>
      <li><a href="#">topic 8</a></li>
      <li><a href="#">topic 9</a></li>
      <li><a href="#">topic 10</a></li>
      <li><a href="#">topic 11</a></li>
      <li><a href="#">topic 12</a></li>
      <li><a href="#">topic 13</a></li>
      <li><a href="#">topic 14</a></li>
      <li><a href="#">topic 15</a></li>
      <li><a href="#">topic 16</a></li>
      
    </ul>
  </div>
  <div class="main">
    <h2>Popular courses</h2>
    <h5>sample video</h5>
    <div class=" videodisp" style="height:420px; width:600px;" ><video src="code1.mp4" controls  style=""></video></div>
    <p>Some text..</p>
    <p>this is a sample video to ilustrate how we can use video contents in out web page</p>
    <br>
    <h2>php debug</h2>
    <h5>vscode PHP debuging</h5>
    <div class="videodisp" style="height:420px; width:600px;"><video src="vscodePHPdebug.webm" controls ></video></div>
    <p>How to debug php in vs code</p>
    <p>The above video explains how we can debug PHP in vs code. as we all know PHP is one of the most powerfull backend web development languages whic helps to build dynamic web pages that are interactive and request based. As we go in to the coding part we see that the pages tend to give response based onn the request of the user, tha is what PHP is there for.</p>
  </div>
</div>


<script src="index.js"></script>

<?php include 'footer.php' ?>
</body>
</html>
