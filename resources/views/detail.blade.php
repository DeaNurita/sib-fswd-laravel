<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Detail Pengguna</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Detail Pengguna</h1>
            <div>
                <a href="./tampil.blade.php" class="btn btn-primary">Kembali</a>
            </div>
        </header>
                    <form class="row g-3" method="post" enctype= "multipart/form-data">
                        <input type="hidden" name="pengguna_id" value="<?php echo '#'?>">

                        <div class="col-12">
                            <label for="name" class="form-label">Nama</label>
                            <p class="form-control">
                                <?php echo 'Dea Nurita Febriana' ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <p class="form-control">
                                <?php echo 'admin' ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo '12e45ty' ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <p class="form-control">
                                <?php echo 'deanuritafebriana@gmail.com' ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Telp</label>
                            <p class="form-control">
                                <?php echo '08591754517790'?>
                            </p>
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Alamat</label>
                            <p class="form-control">
                                <?php echo 'Trenggalek'?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Unggah Foto</label>
                            <p class="form-control">
                            <?php echo 'avatar.jpg'?>
                            </p>
                        </div>
                    </form>
    </div>
</body>
</html>