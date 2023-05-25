@extends('layouts.main')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tr>
                <td><?php echo 'Dea Nurita Febriana'?></td>
                <td><?php echo 'deanuritafebriana@gmail.com'?></td>
                <td><?php echo 'Admin'?></td>
            </tr>

            <tr>
                <td><?php echo 'Deny Teja Kridyanto'?></td>
                <td><?php echo 'denytejakridyanto@gmail.com'?></td>
                <td><?php echo 'Staff'?></td>
            </tr>
        </tr>
@endsection