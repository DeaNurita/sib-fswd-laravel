@extends('layout.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>

        <a class="btn btn-primary mb-2" href="{{ route('category.create') }}" role="button">Create New</a>

        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Genre</th>
                            <th>Price</th>
                        </tr>
                    </thead>
               
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection