<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assigment 05 - Humphrey, Adrian</title>
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="css/style2.css"/>
</head>
<body style="background-image: url(images/tile.png)">
<script>
function shadow(){
  document.getElementById("image1").style = "box-shadow: 10px 20x 30px black";
  document.getElementById("image2").style = "box-shadow: 10px 20x 30px black";
  document.getElementById("image3").style = "box-shadow: 10px 20x 30px black";
  document.getElementById("image4").style = "box-shadow: 10px 20x 30px black";
}
function noShadow(){
  document.getElementById("image1").style = "box-shadow: none";
  document.getElementById("image2").style = "box-shadow: none";
  document.getElementById("image3").style = "box-shadow: none";
  document.getElementById("image4").style = "box-shadow: none";
}
</script>
<div id="container">
<header>
<h1>Three Column Layout</h1>
</header>

<div id="content">
<div id="list">
<nav>
  <ul>
    <li><a href="#">One</a></li>
    <li><a href="#">Two</a></li>
    <li><a href="#">Three</a></li>
    <li><a href="#">Four</a></li>
  </ul>
</nav>
</div>
<main>
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting
  industry. Lorem Ipsum has been the industry's standard dummy text ever
  since the 1500s, when an unknown printer took a galley of type and
  scrambled it to make a type specimen book. It has survived not only
  five centuries, but also the leap into electronic typesetting,
  remaining essentially unchanged. It was popularised in the 1960s
  with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus
  PageMaker including versions of Lorem Ipsum.
  </p>
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting
  industry. Lorem Ipsum has been the industry's standard dummy text ever
  since the 1500s, when an unknown printer took a galley of type and
  scrambled it to make a type specimen book. It has survived not only
  five centuries, but also the leap into electronic typesetting,
  remaining essentially unchanged. It was popularised in the 1960s
  with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus
  PageMaker including versions of Lorem Ipsum.
  </p>
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting
  industry. Lorem Ipsum has been the industry's standard dummy text ever
  since the 1500s, when an unknown printer took a galley of type and
  scrambled it to make a type specimen book. It has survived not only
  five centuries, but also the leap into electronic typesetting,
  remaining essentially unchanged. It was popularised in the 1960s
  with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus
  PageMaker including versions of Lorem Ipsum.
  </p>
</main>
<div id="images">
  <h3>Four Buttons</h3>
  <img src="images/10.jpg" id="image1">
  <img src="images/20.jpg" id="image2">
  <img src="images/30.jpg" id="image3">
  <img src="images/40.jpg" id="image4">
  <div id="change" style="text-align: center">
    <button type="button" onclick = "shadow()">Shadow On</button>
    <button type="button" onclick = "noShadow()">Shadow Off</button>
  </div>
</div>
</div>
<footer>
  <p>Copyright</p>
</footer>
</div>
</body>
</html>
