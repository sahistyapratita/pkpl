<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biann</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        h1{
            margin-bottom: 10px;
        }


        body{
            width: 100%;
            height: 100vh;
            background-color: aqua;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-hasiltugas3{
            width: fit-content;
            background-color: white;
            padding: 2rem 4rem;
            border-radius: 30px;
        }

        a{
            text-decoration: none;
            background-color: purple;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
        }

        .desc{
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">

    <div class="container-hasiltugas3">
        <h1>Your Input</h1>
        <?php
        
            // if(empty($_POST["name"])){
            //     header("Location: tugas3.php?name=kosong");
            // }elseif(empty($_POST["nim"])){
            //     header("Location: tugas3.php?nim=kosong");
            // }elseif(empty($_POST["email"])){
            //     header("Location: tugas3.php?email=kosong");
            // }elseif(empty($_POST["date"])){
            //     header("Location: tugas3.php?date=kosong");
            // }elseif(empty($_POST["gender"])){
            //     header("Location: tugas3.php?gender=kosong");
            // }elseif(empty($_POST["hobi"])){
            //     header("Location: tugas3.php?hobi=kosong");
            // }elseif(empty($_POST["desc"])){
            //     header("Location: tugas3.php?desc=kosong");
            // }else{
                
            // }
        
        ?>
        <div>Name  :<?= $_POST['name']; ?></div>
        <div>Nim : <?= $_POST['nim']; ?></div>
        <div>Email : <?= $_POST['email']; ?></div>
        <div>Date : <?= $_POST['date']; ?></div>
        <div>Gender : <?= $_POST['gender']; ?></div>
        <div>Hobi : <?= $_POST['hobi']; ?></div>
        <div class="desc">Deskripsi : <?= $_POST['desc']; ?></div>
        <a href="index.html">back</a>

    </div>
    
</body>
</html>

