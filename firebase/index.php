<?php
session_start();
include 'includes/header.php';
?>

    
    <div class="conatiner mt-5">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
        <?php
    if(isset($_SESSION['status']))
    {
      echo '<h3 class="bg-success p-3 text-white">'.$_SESSION['status'].'</h3>';
      unset($_SESSION['status']);
    }    
    ?>
        <div class="card">
          <div class="card-body">
            <h2>CRUD-Firebase using Realtime Database
            <a href="add_data.php" class="btn btn-primary float-end">Add Data</a></h2>
            <hr>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sno</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "dbconfig.php";
                $ref_table="register";
                $fetch_data = $database->getReference($ref_table)->getValue();
                if($fetch_data>0)
                {
                    $i=1;
                    foreach($fetch_data as $key=>$data)
                    {
                      ?>
                        <tr>
                          <td><?= $i++;?></td>
                          <td><?= $data['email'];?></td>
                          <td><?= $data['password'];?></td>
                          <td><a href="edit_data.php?id=<?=$key;?>" class="btn btn-info">Edit</a></td>
                          <form action="crud.php" method="post">
                            <td><button type="submit" class="btn btn-danger" name="delete" value="<?=$key;?>">Delete</button></td>
                          </form>
                        </tr>  
                      <?php
                    }
                }
                ?>
                              
              </tbody>
            </table>
          </div>
        </div>
        </div>        
      </div>
    </div>
    
<?php
include 'includes/footer.php';
?>

