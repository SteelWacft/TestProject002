<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h3 class="title">Test002</h3>

    <div class="logpop">
        <form method="post">
            <p class="reg">Register</p>
            <input type="text" placeholder="Username" name="user" class="userl"> <img src="https://cdn.pixabay.com/photo/2013/07/12/17/00/approved-151676__340.png" class="check1">
            <input type="password" placeholder="Password" name="pass" class="passl"> <img src="https://cdn.pixabay.com/photo/2013/07/12/17/00/approved-151676__340.png" class="check2">
            <input type="submit" name="sub" class="subl">
            <img src="https://www.w3schools.com/howto/img_avatar.png" class="guestimg"> 
        </form>
    </div>
    <div class="calculator">
        <form method="post">
            <p class="amt">Multiplication calculator</br> EX: 5x5</p>
            <input type="text" placeholder="number" name="group1" class="value1">
            <input type="text" placeholder="number" name="group1" class="value2">
            <input type="submit" name="sub" class="sub2">
        </form>
    </div>
    <?php
    function multiply($a, $b) {
        return $a * $b;
      }

    if($_POST['group1']){
    return "$a * $b";
    }



    ?>

</body>
</html>