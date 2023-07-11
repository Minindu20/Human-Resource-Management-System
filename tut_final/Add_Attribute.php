<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<style>
h4{text-align:center;}
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin_2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-icons.css">
</head>

<body style="background: var(--bs-gray-300);">
    <section>
        <div>
            <div>
                <section class="position-relative py-4 py-xl-5">
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                                <div class="card mb-5">
                                    <div class="card-body p-sm-5" style="border-style: solid;background: rgb(13, 202, 240);">
                                        <?php
                                           if(isset($_POST['attribute_name']) &&isset( $_POST['data_type'])){
                                            $attribute = $_POST['attribute_name'];
                                            $data_type = $_POST['data_type'];
                                            $connection = mysqli_connect('localhost','root','','project_hr');
                                            if(!$connection)
                                                die("could not connect".mysqli_connect_error());
                                            $quary = "ALTER TABLE personal_data ADD $attribute $data_type";
                                            if(mysqli_query($connection,$quary)){
                                                
                                               echo "<h4> database changed successfully.
                                                     </h4>";
                                    
                                             }else{
                                                  echo "ERROR: sorry process failed. "
                                                  . mysqli_error($connection);
                                                  }
                                           }
                                           else{
                                            ?>
                                           <form action=""  method="post">
                                            <div class="mb-3">
                                                <p><strong>Attribute Name</strong></p><input class="form-control" type="text" id="name-1" name="attribute_name" placeholder="Attribute name">
                                            </div>
                                            <div class="mb-3">
                                                <p><strong>Data Type</strong></p><input class="form-control" type="text" id="name-2" name="data_type" placeholder="Data type">
                                            </div>
                                            <div><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-gray-dark);">Add new Attribute</button></div>
                                            </form>
                                        <?php } ?>      
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </section>
             </div>
         </div>
     </section>
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                                                    
                               
</body>

</html>




