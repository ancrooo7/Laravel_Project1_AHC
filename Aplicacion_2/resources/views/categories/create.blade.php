@extends('app')
@section('content')
    <div class="row">

      <div class="col-lg-12">

        <h1 class="my-4">Categorie create</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <br>
            <input type="text" name="name" value="" class="form-control" />
            <br>
            <input type="submit" class="btn btn-primary" value="Save">
            <br><br>
        </form>

    </div>
    <!-- /.row -->
@endsection
