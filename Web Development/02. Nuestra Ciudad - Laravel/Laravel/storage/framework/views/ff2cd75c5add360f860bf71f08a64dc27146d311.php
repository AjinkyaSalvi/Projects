<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio | Home</title>
        <link rel="stylesheet" href="/css/ciudad.css">
        <script src="./js/footer_contactus.js"></script>
        <script type="./js/login_form_validation.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
      <header>
           <div class="bg_logo_div">
               <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>

               <nav class="nav_header">
                   <ul>
                       <li><a class="nav_items" href="Home.php" id="active">Inicio </a></li>
                       <li>/</li>
                       <li><a class="nav_items" href="AboutUs.php"> Nosotros </a></li>
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
                                   <br>
                                   <br>
                                   <label for="contraseña"> Contraseña</label>
                                   <br>
                                   <input type="password" placeholder=" Tu Contraseña" class="login_input" id="login_frm_password" name="login_frm_password" required>
                                   <br>
                                   <br>
                               </div>
                               <br>
                               <input type="submit" name="login_frm_btn" value="LOGIN" class="login_button">
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
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/welcome.blade.php ENDPATH**/ ?>