<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
  <style>
    .container{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .row{
        display: flex;
    }
    .box{
        width: 50px;
        height: 50px;
        background-color: salmon;
        display: flex;
        align-items: center;
        font-size: 20px;
        font-weight: bold;
        border: 1px solid black;
        box-sizing: border-box
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>
    
</body>
</html>