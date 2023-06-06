<?php
session_start();
include 'includes/header.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center">Register Form
                    <a href="index.php" class="btn btn-primary float-end">Back</a></h2>
                    <hr>
                </div>
            </div>
            <div class="bg-dark text-white p-5">
                
            <form action="crud.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                </div>
            </form>
            </div>
        </div>        
    </div>
</div>
<?php
include 'includes/footer.php';