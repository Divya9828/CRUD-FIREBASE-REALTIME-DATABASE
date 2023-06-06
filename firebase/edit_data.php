<?php
session_start();
include 'includes/header.php';
?>
   
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="bg-dark text-white p-5">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Edit and Update
                    <a href="index.php" class="btn btn-primary float-end">Back</a></h2>
                </div>
            </div>
                <?php
                include 'dbconfig.php';
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $ref_table="register";
                    $get_data = $database->getReference($ref_table)->getChild($id)->getValue();
                    if($get_data>0)
                    {
                        ?>
                            <form action="crud.php" method="post">
                                <input type="hidden" name="id" value="<?=$id;?>">

                                <div class="mb-3 mt-2">
                                    <label for="exampleInputEmail1" class="form-label ">Email address</label>
                                    <input type="email" class="form-control" name="email" value="<?=$get_data['email'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" value="<?=$get_data['password'];?>"id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                </div>
                            </form>
                        <?php
                    }
                    else
                    {
                     $_SESSION['status']="Invalid id";
                     header('Location:index.php');
                     exit();   
                    }
                }
                else
                {
                    $_SESSION['status']="Not Found";
                     header('Location:index.php');
                     exit(); 
                }
                ?>            
            </div>
            </div>        
    </div>
</div>
<?php
include 'includes/footer.php';
?>