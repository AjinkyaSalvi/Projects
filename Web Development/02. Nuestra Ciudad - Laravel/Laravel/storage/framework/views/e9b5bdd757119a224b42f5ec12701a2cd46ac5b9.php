<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <?php include 'footer_contactus.php';?>
    <title>Nosotros | About Us</title>
    <link rel="stylesheet" href="./ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="./js/footer_contactus.js"></script>
     <script type="./js/login_form_validation.js"></script>
</head>
<body>
  <header>
        <!--Navigation bar   header-->
        <div class="bg_logo_div">
             <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

             <nav class="nav_header">
                  <ul>
                  <li><a class="nav_items" href="Home.php">Inicio </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="AboutUs.php"id="active"> Nosotros </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="Team.php">Equipos </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="ContactUs.php">Contacto</a> </li>
                  <li>/</li>
                  <li><a class="nav_items" href="#login2">Inicio de Sesion
                       <div id="login2" class="login2-window">
                            <div>
                                 <a href="#" title="Close" class="login2-close"> &times;</a>
                                 <div>
                                      <h1 id="inline">Inicio de </h1>
                                      <h1 class="orange_italic">Sesion</h1>
                                 </div>

                                 <form class="login_form" method="post" onsubmit="return validate_login_form()" action="login_process.php">
                                      <div class="login_border">
                                           <br>
                                           <label for="correo"> Correo</label>
                                           <br>
                                           <input type="email" placeholder=" Tu Correo" class="login_input" id="login_frm_email" name="login_frm_email" required>
                                           <br><br>
                                           <label for="contraseña"> Contraseña</label>
                                           <br>
                                           <input type="password" placeholder=" Tu Contraseña" class="login_input" id="login_frm_password" name="login_frm_password" required>
                                           <br><br>
                                      </div>
                                      <br>
                                      <input type="submit" name="login_frm_btn" value="LOGIN"  class="login_button">
                                 </form>
                            </div>
                       </div>
                       <!--LOGIN POPUP ENDS HERE-->
                       </a>
                  </li>
                  </ul>
             </nav>
        </div>
   </header>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/AboutUs.blade.php ENDPATH**/ ?>