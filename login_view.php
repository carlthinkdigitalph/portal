<?= $this->extend('layouts/base_layout'); ?>

<?= $this->section('title'); ?>
Login
<?= $this->endSection(); ?>

<?= $this->section('style'); ?>
<style>
/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v8.4.14,
* Autoprefixer: v10.4.7
* Browsers: last 4 version
*/

h1 {
    font-size: 26px;
    font-weight: 700;
}

.navbar,
footer {
    display: none !important;
}

.login-title {
    text-transform: uppercase;
    font-family: "Poppins", Sans-serif;
    font-weight: bold;
    color: #1b651b;
}

h5.card-title {
    color: #fff !important;
    background-color: #1b651b;
    padding: 13px;
    margin: -16px;
}

span.login-title {
    color: #fff !important;
}

.area-wrapper {
    height: 100dvh;
}

.area-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.box-info {
    padding: 20px;
}

.card-body {
    border-top: 1px solid #0000002e;
}

.card {
    box-shadow: 10px 10px 5px 0px rgb(0 0 0 / 6%) !important;
    -webkit-box-shadow: 6px 6px 5px 0px rgb(0 0 0 / 13%) !important;
    -moz-box-shadow: 10px 10px 5px 0px rgb(0 0 0 / 6%) !important;
    background-color: #fff !important;
}

.jea-bg-image {
    background-color: #f7f7f7 !important;
}

button {
    padding: 11px !important;
    font-weight: 700 !important;
}

form {
    padding: 0px 20px;
}

footer {
    display: none;
}

@media all and (max-width: 799px) {
    h1 {
        text-align: center;
    }

    main.xs--login {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
            -ms-flex-direction: column;
                flex-direction: column;
    }

    main.xs--login {
        padding: 20px 10px 60px !important;
    }
    .box-info {
      order: 2;
    }

}
</style>
<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<div class="jea-bg-image">
      
    <div class="jea-blur pb-5 area-wrapper"> 
        <main class="xs--login container d-flex justify-content-center pt-5">
            <div class="col-12 col-md-12 col-lg-4 col-xl-6 box-info">
                <h1>Welcome to <span class="green">CvSU Silang<span> Student Portal</h1>
                 <div class="txtbox--ac">
                    <br>
                    <p>For <span class="fw-bold green">new student</span> portal registration, <a href="/register">Register</a></p>
                </div>
                <div class="txtbox--ac">
                    <p>Sign up for the student portal using your university-provided student email to conveniently browse through your grades and  view your enrolled subjects online</p>
                    <p>For <span class="fw-bold green">new enrollment</span>, <a href="https://apps.cvsu.edu.ph/" target="_blank">click here</a></p>
                </div>
                <div class="txtbox--ac">
                    <p><span class="fw-bold green">Exciting news!</span> We’re thrilled to announce that we are now accepting  applications at Cavite State University – Silang Campus. Join us on the journey to unlock your potential and pursue academic excellence. Last day of Application is on March 14, 2024</p>
                    <p>For student portal concerns: E-mail the Webmaster at <a href="mailto:webmaster@cvsu-silang.edu.ph">webmaster@cvsu-silang.edu.ph</a></p>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-4 col-xl-4 shadow-sm bg-light bg-opacity-75">
                <div class="py-3 px-0 bg-opacity-75 text-center">
                    <img src="/assets/images/cvsu-silang-logo.png">
                </div>
                <div class="card-body">
                    <?php if (isset($failed_login)) : ?>
                        <div class="alert alert-danger">
                            <span class="helper-block"><?= $failed_login; ?></span>
                        </div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('acctActivated'))) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('acctActivated'); ?>
                        </div>
                    <?php endif ?>

                    <h5 class="card-title text-center mb-5">
                        <span class="login-title">Student Portal</span>
                    </h5>
                    <?= form_open('login') ?>
                    <?= csrf_field() ?>
                    <!-- Email -->
                    <?= validation_show_error('emailaddress', 'my_error_single'); ?>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmailInput" name="emailaddress" inputmode="email" autocomplete="email" placeholder="Email Address" value="" required>
                        <label for="floatingEmailInput">Email Address</label>
                    </div>

                    <!-- Password -->
                    <?= validation_show_error('secretdoor', 'my_error_single'); ?>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPasswordInput" name="secretdoor" inputmode="text" autocomplete="current-password" placeholder="Password" required>
                        <label for="floatingPasswordInput">Password</label>
                    </div>

                    <div class="d-grid col-12 col-md-12 mx-auto m-3">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                    <!-- <p class="text-center">Forgot your password? <a href="http://localhost:8080/login/magic-link">Use a Login Link</a></p> -->
                    <?= form_close(); ?>
                </div>
              
            </div>
            
        </main>
    </div>
</div>
<?= $this->endSection(); ?>
