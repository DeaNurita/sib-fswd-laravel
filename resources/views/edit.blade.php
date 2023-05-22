<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Edit Pengguna</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Pengguna</h1>
            <div>
                <a href="./tampil.blade.php" class="btn btn-primary">Kembali</a>
            </div>
        </header>

                    <form class="row g-3" method="post">
                        <input type="hidden" name="pengguna_id" value="<?php echo '#' ?>"

                        <div class="col-12">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" value="<?php echo 'Dea Nurita Febriana' ?>" id="name" name="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" class="form-control">
                                <option value="<?php echo 'pilih role' ?>"></option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo '12e45ty' ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo 'deanuritafebriana@gmail.com' ?>" placeholder="name@examples.com">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Telp</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="<?php echo '0859175451790' ?>" placeholder="08xxxx">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo 'Trenggalek' ?>" placeholder="Masukkan Alamat Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Unggah Foto</label>
                            <input class="form-control" type="file" id="avatar" name="avatar" value="<?php echo 'avatar.jpg' ?>">
                        </div>
                        <div class="col-12">
                            <button type="submit" id="update" name="update" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
    </div>
</body>
</html>