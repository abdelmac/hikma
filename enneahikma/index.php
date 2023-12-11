<?php
    session_start();

    setcookie('pseudo','abdel', time() + (30 * 24 * 3600));

    echo " id : " . $_COOKIE['id'];

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="https://w7.pngwing.com/pngs/785/649/png-transparent-raging-thunder-2-letter-case-letter-e-angle-text-logo-thumbnail.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ennea H</title>
</head>

<body>

    <?php 
        include "menu.php";
    ?>

    <?php include 'includes/database.php'; ?>
      <h1> Binevenu sur votre profil</h1>

      <?php

          if(isset($_SESSION['email']) && (isset($_SESSION['date']))  )
          {
            ?>
              <p>Votre Email : <?php echo $_SESSION['email']; ?> </p>
              <p>Votre date : <?php echo $_SESSION['date']; ?> </p>

            <?php
          }else{
            echo 'connectez vous';
          }

      ?>

    <aside>
    </aside>
    <h1> LOGIN </h1>
    <section>
        <form method="post">
            <input type="email" name="lemail" id="lemail" placeholder="votre Email" required><br/>
            <input type="password" name="lpassword" id="lpassword" placeholder="votre mots de passe" required><br/>

            <input type="submit" name="formlogin" id="formlogin" value="login" >

        </form>
    </section>

    <?php include 'includes/login.php' ?>

    <h1> SIGN IN </h1>
    <section>
        <form method="post">
            <input type="email" name="email" id="email" placeholder="votre Email" required><br/>
            <input type="password" name="password" id="password" placeholder="votre mots de passe" required><br/>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre mots de passe" required><br/>

            <input type="submit" name="formsend" id="formsend" value="Sign in" >

        </form>
    </section>
    <?php include 'includes/signin.php' ?>


    <script src="script.js" ></script>

    <footer>
        <div class="">

            <div class="service">
                <h3>réseaux sociaux</h3>
                <div class="sidebar-social-media">
                  <div class="sidebar-social-media__content">
                    <div class="sidebar-social-media__content_icon">
                      <span><a href="" target="_blank"> <i class="lab la-twitter"></i> </a> </span>
                      <span><a href="" target="_blank"> <i class="lab la-instagram"></i> </a> </span>
                      <span><a href="" target="_blank"> <i class="lab la-facebook-f"></i> </a> </span>
                      <span><a href="" target="_blank"> <i class="lab la-linkedin-in"></i> </a> </span>
                    </div>
                  </div>
                </div>
            </div>

            <div class="">
                <h3>Media</h3>
                <div class="sidebar-social-media">
                  <div class="sidebar-social-media__content">
                    <div class="sidebar-social-media__content_icon">
                      <p></p>
                      <span> <a href="" target="_blank"> <i class="fas fa-camera"></i>  </a> </span>
                    </div>
                </div>
            </div>
          </div>

          <div class="service">
              <h3>Société</h3>
              <div class="sidebar-social-media">
                <div class="sidebar-social-media__content">
                  <div class="sidebar-social-media__content_icon">
                    <p></p>
                    <span> <a href="" target="_blank"> <i class="fas fa-suitcase"></i> </a> </span>
                  </div>
              </div>
          </div>
        </div>
        </div>
          <h3>ennea@gmail.com<h3>
          <h4>all rights reserved 2023<h4>

    </footer>




</body>

</html>