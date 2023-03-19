<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>login/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>login/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>login/css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>login/css/pages/auth.css">

    </style>
</head>

<body style="background-image:url(<?=base_url('assets/login/images/bg/hai.jpg')?>);background-size:cover;background-repeat:no-repeat;">

    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12 card">
                <div id="auth-left">
                    
                    <h1 class="auth-title">Masuk.</h1>
                    <p class="auth-subtitle mb-5">Masuk dengan data Anda yang Anda masukkan saat regristasi.</p>
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('login_admin') ?>" method="post">
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="control-group col-sm-6">
                                <label>Your Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <br>
                        <div class="button"><button type="submit">Login</button></div>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum memiliki akun? <a href="<?= base_url('registrasi') ?>"
                                class="font-bold">Daftar
                                </a>.</p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</body>

</html>