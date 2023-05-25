<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Data Pengguna</title>
</head>
<body>
    
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="card">
                <h4>Data Pengguna
                <a href="./tambah.blade.php" class="btn btn-primary float-end">Tambah Pengguna</a>
                </h4>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Aksi</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data_users as $item) --}}
                                    <tr>
                                        <td><?php echo '1'?></td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="post" style="display: inline;">
                                                <button type="submit" name="delete" value="" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                        <td><img src="avatar.jpg" alt="Avatar" width="50"></td>
                                        <td><?php echo 'Dea Nurita Febriana'?></td>
                                        <td><?php echo 'deanuritafebriana@gmail.com'?></td>
                                        <td><?php echo '0859175451790'?></td>
                                        <td><?php echo 'admin'?></td>
                                    </tr>

                                    <tr>
                                        <td><?php echo '2'?></td>
                                        <td>
                                            <a href="./detail.blade.php" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="./edit.blade.php" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="post" style="display: inline;">
                                                <button type="submit" name="delete" value="" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                        <td><img src="avatar.jpg" alt="Avatar" width="50"></td>
                                        <td><?php echo 'Dea Nurita Febriana'?></td>
                                        <td><?php echo 'deanuritafebriana@gmail.com'?></td>
                                        <td><?php echo '0859175451790'?></td>
                                        <td><?php echo 'admin'?></td>
                                    </tr>
                                    {{-- <tr>
                                        <td><?php echo '3'?></td>
                                        <td>
                                            <a href="./detail.blade.php" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="./edit.blade.php" class="btn btn-warning btn-sm">Edit</a>
                                            <form method="post" style="display: inline;">
                                                <button type="submit" name="delete" value="" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                        <td><img src="avatar.jpg" alt="Avatar" width="50"></td>
                                        <td>{{$item['name']}}</td>
                                        <td>{{$item['email']}}</td>
                                        <td>{{$item['phone']}}</td>
                                        <td>{{$item['role']}}</td>
                                    </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>