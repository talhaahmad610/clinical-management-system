<?php include 'includes/header.php'; ?>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white">
                        <i class="fa fa-lock"></i> Update Password
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label for="" class="fa fa-lock">New Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                        </div>
                        <div class="form-group mt-2">
                        <label for="" class="fa fa-lock">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password" name="password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-dark text-white w-100"><i class="fa fa-unlock"></i>Update Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>