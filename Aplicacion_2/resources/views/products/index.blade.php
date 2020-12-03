@extends('app')
@section('content')
    <div class="row">

      <div class="col-lg-12">

        <h1 class="my-4">Products</h1>
        
        <a href="{{ route('products.create') }}" class="btn btn-info">New Category</a>
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('products.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>    
                    </tr>  
                @endforeach
            </thead>
        </table>
      </div>
      <!-- /.col-lg-12-->

    </div>
    <!-- /.row -->
@endsection
