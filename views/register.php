<div class="card mx-auto my-5">
    <div class="row no-gutters">
        <div class="col-md-6">
            <div class="card-img">
                <img src="" alt="place image here">
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title text-center">Register</h5>
                <form action="" method="post" class="form">
                    <div class="form-group">
                        <label for="regName">Name</label>
                        <input type="text" name="name" id="regName" class="form-control <?php echo $model->hasError('name') ? 'is-invalid' : '';?>">
                        <small class="invalid-feedback">
                            <?php echo $model->getFirstError('name');?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" id="regEmail" class="form-control <?php echo $model->hasError('email') ? 'is-invalid' : '';?>">
                        <small class="invalid-feedback">
                            <?php echo $model->getFirstError('email');?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="regPass" class="form-control <?php echo $model->hasError('password') ? 'is-invalid' : '';?>">
                        <small class="invalid-feedback">
                            <?php echo $model->getFirstError('password');?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirmPassword" id="regConfirmPass" class="form-control <?php echo $model->hasError('confirmPassword') ? 'is-invalid' : '';?>">
                        <small class="invalid-feedback">
                            <?php echo $model->getFirstError('confirmPassword');?>
                        </small>
                    </div>

                    <button type="submit" class="btn btn-block btn-primary" id="registerBtn" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>