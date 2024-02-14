<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>
  .container{
    border:2px solid red;
    display:grid;
    grid-template-columns:repeat(13,auto);
    position:relative;
    top:500px;
    height:200px;
    margin:50px;
  }
  .item:nth-child(2n){
    background-color:green;
  }
</style>
</head>
<body>
  
<div class="container">
  <div class="item">1</div>
  <div class="item">2</div>
  <div class="item">3</div>
  <div class="item">4</div>
  <div class="item">5</div>
  <div class="item">6</div>
  <div class="item">7</div>
  <div class="item">8</div>
  <div class="item">9</div>
  <div class="item">10</div>
  <div class="item">11</div>
  <div class="item">12</div>
  <div class="item">13</div>
</div>
</body>
</html>