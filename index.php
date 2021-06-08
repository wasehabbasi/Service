<?php
include "template-parts/header.php";
?>
<div class="login-wrapper login-container full-height d-flex ">
    <div class="login-left-wrapper flex-row-reverse bg-solid-teal-3 full-height d-flex flex-1  align-items-center text-align-right p-4">
        <div class="align-item-center">
            <h2>Already have an account?</h2>
            <a href="#" id="login" class="btn btn-md btn-teal-900">Login</a>
        </div>
    </div>
    <div class="login-right-wrapper d-flex bg-solid-teal-3 full-height align-items-center flex-1 p-4">
        <div class="align-item-center">
            <h2>Don't have an account?</h2>
            <a href="#" id="signup" class="btn btn-md btn-teal-900">Register</a>
        </div>
    </div>
</div>
<div class="login-wrapper absolute sendback-1 top left w-full full-height loginform d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="theme-card">
                    <div class="theme-header">
                        <h2>Login</h2>
                        <p class="tagline">provide your credentials to get access to the dashboard.</p>
                    </div>
                    <form action="">
                        <div class="theme-body">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="theme-footer">
                            <div class="form-group mb-3">
                                <input type="button" class="btn btn-lg btn-block btn-teal-900 w-full" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "template-parts/footer.php";
?>