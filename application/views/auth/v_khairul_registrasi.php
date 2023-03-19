<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
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
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                   
                    <h1 class="auth-title text-white">Masukan data diri anda</h1>
                    <p class="auth2-subtitle mb-5"></p>

                    <form  action="<?= base_url('registrasi') ?>" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="nik" name="nik" placeholder="NIK">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Nama" id="nama_lengkap" name="nama_lengkap">
                                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" id="username" name="username">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="telp"  id="telepon" name="telepon">
                                    <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" id="password" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" id="password" name="password2"  class="form-control form-control-xl" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar sekarang</button>
                    </form>
                   
                </div>
            </div>
            
        </div>

    </div>
</body>

</html>