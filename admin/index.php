<?php include "includes/admin_header.php";?>
    <div id="wrapper">



        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
   
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                        <h1 class="page-header">
                            Welcome to admin
                            
                            
                            <small> <?php 

                            if(isset($_SESSION['username'])) {

                            echo $_SESSION['username'];




                            }


                            // if(is_admin($_SESSION['username'])){

                            //     echo " -- is admin too";

                            // } else {

                            //     echo " ---is not";

                            // }





                            ?></small>
                        </h1>




     
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        
    
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>



        <script>

            $(document).ready(function(){


              var pusher =   new Pusher('5a3f3c2f772965086cb9', {

                  cluster: 'us2',
                  encrypted: true
              });


              var notificationChannel =  pusher.subscribe('notifications');


                notificationChannel.bind('new_user', function(notification){

                    var message = notification.message;

                    toastr.success(`${message} just registered`);

                });



            });



        </script>
