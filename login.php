<?php 
include("includes/header.php")
?>

<div class="container ">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Registeration Form</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include("includes/footer.php")
?>