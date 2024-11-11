<?php
session_start();
     if(!isset($_SESSION['lietotajvards9696'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <a href="./" class="logo" id="logo-text">
            <i class="fa fa-server"></i> IT atbalsts
        </a>
        <div class="apply">
            <a href="./" class="btn">Sākums</a>
            <a href="./" class="btn">Pieteikumi</a>
            <a href="./" class="btn">PRO īpašnieki</a>
            <a href="logout.php" class="btn">Sākums</a>
        </div>
    </header>

    <div class="admin-top">
        <div>
            <input type="text" placeholder="Meklēšana">
            <a class="btn-sm"></a>
        </div>
        <div>
            <a class="btn-sm" id="new-btn">
                <i class="fa fa-plus"></i>Pievienot jaunu
            </a>
        </div>
    </div>

    <div class="admin-main">
        <table>
            <tr>
                <th>ID</th>
                <th>Vards</th>
                <th>Uzvards</th>
                <th>E-pasts</th>
                <th>Talrunis</th>
                <th>Datums</th>
                <th>Statuss</th>
                <th></th>
            </tr>
            <tbody id="pieteikumi"></tbody>
        </table>

    </div>
    

    <!-- Modal for ticket creation -->
    <div class="modal" id="modal-ticket">
        <div class="modal-box">
            <div class="close-modal" data-target="#modal-ticket">
                <i class="fa fa-times"></i>
            </div>
            <h2 id="modal-title">Izveidot jaunu pieteikumu</h2>
            <form action="pieteikumi.php" method="POST">
                <label for="name" id="modal-vards">Vārds:</label>
                <input type="text" id="name" name="vards" required>
                <label for="surname" id="modal-uzvards">Uzvārds:</label>
                <input type="text" id="surname" name="uzvards" required>
                <label for="email" id="modal-epasts">E-pasta adrese:</label>
                <input type="email" id="email" name="epasts" required>
                <label for="phone" id="modal-tel">Tālruņa numurs:</label>
                <input type="tel" id="phone" pattern="[0-9]{8}" name="talrunis" required>
                <label for="description" id="modal-desc">Problēmas / veicamā uzdevuma apraksts:</label>
                <textarea id="description" name="apraksts" rows="4" required></textarea>
                <button type="submit" name="nosutit" class="btn active" id="submit-button">Nosūtīt</button>
            </form>
        </div>
     </div>

     <?php
        if(isset($_SESSION['pazinojums']));
     ?>

     <div class="modal " id="modal-message">
        <div class="modal-box">
            <div class="close-modal" data-target="#modal-message">
                <i class="fa fa-times"></i>
            </div>
            <h2 id="">
              

            </h2>
        </div>
     </div>
</body>
</html>
