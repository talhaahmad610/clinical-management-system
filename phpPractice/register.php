<?php include 'includes/header.php'; ?>
<div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white">
                        <i class="fa fa-user-plus"></i> Sign up
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label for="" class="fa fa-user-circle">Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group mt-3">
                        <label for="" class="fa fa-envelope">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group mt-3">
                        <label for="" class="fa fa-whatsapp">What'sApp</label>
                        <input type="number" class="form-control" placeholder="Enter Whatsapp" name="whatsapp">
                        </div>
                        <div class="form-group mt-3">
                        <label for="" class="fa fa-"><i class="fa fa-venus-mars"></i>Gender</label> <br>
                        <i class="fa fa-male"></i>Male
                        <input type="radio"  value="male" name="gender">
                        <i class="fa fa-female"></i>Female
                        <input type="radio"  value="female" name="gender">
                        </div>
                        <div class="form-group mt-3">
                        <label for="" class="fa fa-key">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-dark text-white w-100"><i class="fa fa-user-plus"></i>Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>