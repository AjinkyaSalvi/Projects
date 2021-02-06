<!--Shubham Phape || UTA ID- 1001773736-->
<!--Ajinkya Salvi || UTA ID- 1001773996 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="/css/ciudad.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/footer_contactus.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--Navigation bar   header-->
        <header>
            <div class="bg_logo_div">
                <img id="logo_image" src="Images/i.jpg" ALT="Ciudad" ALIGN=CENTER>
                <nav class="nav_header">
                  <ul>
                  <li><a class="nav_items" href="<?php echo e(route('home')); ?>">Inicio </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="<?php echo e(route('AboutUs')); ?>"> Nosotros </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="<?php echo e(route('Team')); ?>">Equipos </a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="https://sxp3737.uta.cloud/Blog/">Blog</a></li>
                  <li>/</li>
                  <li><a class="nav_items" href="<?php echo e(route('contactus')); ?>">Contacto</a> </li>
                  <li>/</li>
                        <li><a class="nav_items" href="<?php echo e(route('logout')); ?>" id="active">Log Out</a></li>
                  </ul>
                </nav>
            </div>
            <!--Banner code here-->
            <div class="banner_div" >
                <img  class="banner_div_img" src="./Images/Banner.png">
                <div class="banner_outter_text">
                    <h1 class="banner_text">Dashboard</h1>
                    <h5 class="banner_text">Welcome, <?php echo e(Session('currentuser')['name']); ?></h5>

                </div>
            </div>
            <!--Banner Ends here-->
            <!--HEADER ends here-->
        </header>
        <!--div for wrapping the whole content-->

        <div class="content_wrap">
          <?php if($operation != NULL): ?>
            <br><text style='color:green;'><?php echo e($operation ?? ''); ?></text><br>
          <?php endif; ?>
            <div class="userd_grid">
             <div class="profile_board">
                <h1 class="profile_board_name">Personal Information</h1>
                <h2> <?php echo e(Session('currentuser')['name']); ?></h2>
                <p class="profile_board_name"> <?php echo e(Session('currentuser')['email']); ?></p>
                <p class="profile_board_name"> <?php echo e(Session('currentuser')['phoneno']); ?></p>
                <p class="profile_board_name"> <?php echo e(Session('currentuser')['city']); ?></p>

            </div><br><br><br><br>

            <div class="userd_events_grid">
                    <h2 class="orange_italic"> Upcoming Events</h2><br><br>
                    <table>

                        <form method="post" action="<?php echo e(route('register_event')); ?>">
                          <?php echo csrf_field(); ?>
                          <tr>
                                          <td> <br> </td>
                                        </tr>
                                        <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!--Row starts here -->
                                        <tr class='user_events_info_td'>
                                        <td class='userd_events_info_td'><input type='radio' name='event_choice' required value="<?php echo e($item['Eventid']); ?>"> <font id='gray'></font></td>
                                        <td class='user_events_info_td'><?php echo e($item['Ename']); ?></td>
                                        <td class='user_events_info_td' id='padding3'>
                                            <font id='gray'>Event on :</font> <?php echo e($item['Edate']); ?>

                                        </td>
                                        <td class='user_events_info_td'>
                                            <font id='gray'> Status:</font>
                                                      <?php if($item->Eclosedflag == 1): ?>
                                                          </text style='color:green;'> OPEN </text>
                                                       <?php else: ?>
                                                          </font color='red'> CLOSED </font>
                                                      <?php endif; ?>
                                        </td>
                                        </tr>  <tr> <td> <br> </td> </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                          <tr> <td> <br> </td> </tr>
                                      <tr>
                                       <td></td>
                                       <td></td>
                                       <td> </td>
                                        <td class="user_events_info_td" id="padding3">

                                            <input type="submit" name="register_event" value="Register Event" title="Edit this Blog" class="contact_us_form_btn">

                                        </td>
                                        </tr>
                                        <tr>
                                          <td> <br> </td>
                                        </tr>

                      </form>
                    </table>
                  </div>

          </div>
        </div>
        <!--Main wrapper class ends here-->
        <!--footer starts here-->
        <footer>
            <!--FIRST BLOCK OF FOOTER-->
            <!--CONTACT US EMAIL US PART OF FOOTER-->

            <div class="trial_footer_grid">
        <div class="trial_upper_footer">
            <br><br>
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
                    <br><br>
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
    </div>
    <!--body Ends here-->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/users/userdashboard.blade.php ENDPATH**/ ?>