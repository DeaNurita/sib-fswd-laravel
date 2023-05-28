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
                            <th>Kategori</th>
                            <th>#</th>
                        </tr>
                    </thead>
               
                    <tbody>
                        @foreach ($category as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>
                                <a href="{{ route('category.edit', ['id'=> $item->id]) }}" role="button" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('category.destroy', $item->id)}}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" value="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection