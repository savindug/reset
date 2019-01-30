<?php include_once 'header.php'?>

   <div class="container">
       <div class="row">
           <div class="col-lg-6 m-auto">
               <div class="card-bg-light mt-5">
                   <div class="card-title bg-primary text-white mt-5">
                       <h3 class="text-center py-3">Reset Password</h3>
                   </div>

                   <?php
                    if (isset($_GET['empty'])) {

                        $massage = $_GET['empty'];
                        $massage = "Enter User Name & Email";
                        ?>
                        <div class="alert alert-danger text-center"><?php echo $massage ?></div>
                    <?php
                    }
                   ?>

                          <?php
                    if (isset($_GET['invalid'])) {

                        $massage = $_GET['invalid'];
                        $massage = "Invalid User Name";
                        ?>
                        <div class="alert alert-danger text-center"><?php echo $massage ?></div>
                    <?php
                    }
                   ?>

                   
                   <?php
                    if (isset($_GET['incorrect'])) {

                        $massage = $_GET['incorrect'];
                        $massage = "Invalid Email";
                        ?>
                        <div class="alert alert-danger text-center"><?php echo $massage ?></div>
                    <?php
                    }
                   ?>
 
                         <?php
                                if (isset($_GET['success'])) {

                                    $massage = $_GET['success'];
                                    $massage = "Please confirm your email to reset your password";
                                    ?>
                                    <div class="alert alert-info text-center"><?php echo $massage ?></div>
                                <?php
                                }
                            ?>

                            <?php
                                if (isset($_GET['error'])) {

                                    $massage = $_GET['error'];
                                    $massage = "Mail Error";
                                    ?>
                                    <div class="alert alert-info text-center"><?php echo $massage ?></div>
                                <?php
                                }
                            ?>
                    
                   <div class="cerd-body">
                 <form  action="send_link.php" method="POST">
                       
                       <input type="text" name="username" placeholder="Username" class="form-control my-3">

                       <input type="email" name="email" placeholder="Email" class="form-control my-3">

                       <button type="submit" class="btn btn-info mt-3" name="submit">Submit</button>
                       
                       </form>
                   </div>

               </div>
           </div>
       </div>
   </div>

<?php include_once 'footer.php'?>

