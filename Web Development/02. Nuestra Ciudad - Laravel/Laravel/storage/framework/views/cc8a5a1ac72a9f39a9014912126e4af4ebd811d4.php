<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Nuestros Equipos | Our Team</title>
    <link rel="stylesheet" href="/css/ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/footer_contactus.js"></script>
    <script type="./js/login_form_validation.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <header>
            <div class="bg_logo_div">
                <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>
                <nav class="nav_header">
                    <ul>
                        <li><a class="nav_items" href="<?php echo e(route('home')); ?>">Inicio </a> </li>
                    <li>/</li>
                    <li><a class="nav_items" href="<?php echo e(route('AboutUs')); ?>"> Nosotros </a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="<?php echo e(route('Team')); ?>" id="active">Equipos </a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                    <li>/</li>
                    <li><a class="nav_items" href="<?php echo e(route('contactus')); ?>">Contacto</a> </li>
                    <li>/</li>
                    <li><a class="nav_items" href="#login2">Inicio de Sesion
                        <div id="login2" class="login2-window">
    <div>

        <a href="#" title="Close" class="login2-close"> &times;</a>
                        <div>
                            <h1 id="inline">Inicio de </h1>
                            <h1 class="orange_italic">Sesion</h1></div>
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
                           <input type="submit" name="login_frm_btn" value="LOGIN"  class="login_button">
                        </form>

        </div>
        </div>
        <!--LOGIN POPUP ENDS HERE--></a></li>
                    </ul>
                </nav>
            </div>
            <!--Banner code here-->
          <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">NUESTROS EQUIPOS</h1>
                    <h5 class="banner_text">INICIO > NUESTROS EQUIPOS</h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
         <div class="content_wrap">
           <div class="team_heading">
               <h2 class="display_inline">Equipo de </h2>
               <h2 class="orange_italic">  Direccion</h2>
           </div>
           <div class="direccion_container">
              <?php $__currentLoopData = $direction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class='item2'>
                   <figure>
                       <img class='big_team_member_img' src="<?php echo e($item->image_url); ?>">
                       <figcaption>
                           <font><?php echo $item->TName; ?></font>
                               <br>
                               <font class='member_place_name'><?php echo $item->TLocation; ?></font>
                           </figcaption>
                       </figure>
                   </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               <!--direccion container ends below-->
           </div>

            <!--Next Photos of team members start here-->
            <div class="team_heading_2">
                <h2 class="display_inline">Equipo de </h2>
                <h2 class="orange_italic">  Trabajo Multidisciplina </h2>
            </div>
            <!--Profile photos-->
            <div>
                <div class="small_profiles">
                          <?php $__currentLoopData = $restteam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class='profile_item'>
                                 <figure><img  class='small_team_member_img' src="<?php echo e($item->image_url); ?>">
                                 <figcaption><font><?php echo $item->TName; ?></font>
                                <br><font class='member_place_name'><?php echo $item->TLocation; ?></font></figcaption>
                                 </figure>
                           </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>

         </div>

        <!--footer starts here-->
        <footer>
            <!--FIRST BLOCK OF FOOTER-->
            <!--CONTACT US EMAIL US PART OF FOOTER-->

            <div class="trial_footer_grid">
                <div class="trial_upper_footer">
                    <br>
                    <br>
                    <div class="trial_inner_grid1">
                        <div>
                            <h1 class="footer_text">Contactate con </h1>
                            <h1 class="orange_italic"> Nosotros</h1>
                        </div>
                        <div>
                            <form name="form_footer_contact_us" id="form_footer_contact_us" method="post" action="<?php echo e(route('footer_contactfrm')); ?>" onsubmit="return validate_footer_email()">
                               <?php echo csrf_field(); ?>
                                <input type="email" name="form_footer_contact_email" id="form_footer_contact_email" placeholder="Email" class="Email_textbox" required>
                                <input type="submit" name="contact_us_email_btn" value="ENVAIR" id="contact_us_email_btn">
                            </form>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="trial_lower_footer">
                    <br>
                    <div class="trial_inner_grid2">
                        <img src="./Images/icons/email.png" class="social_item">
                        <img src="./Images/icons/twitter.png" class="social_item">
                        <img src="./Images/icons/instagram.png" class="social_item">
                    </div>
                    <br>
                    <div class="trial_lower_footer">
                        <div class="copyright_div">
                            <div class="footer_item1">
                                <font class="copyright_orange">DiazApps </font><font class="copyright_text">&#169; 2020 All Rights Resesrved.
                     </font>
                            </div>
                            <div class="footer_item2">
                                <a href="#wrapper">
                                    <img class="top_btn" src="Images/icons/big_up_box.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!---->
            <!---->
            <!---->
        </footer>
        <!--footer has ended ABOVE here-->

     </body>

     </html>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/Team.blade.php ENDPATH**/ ?>