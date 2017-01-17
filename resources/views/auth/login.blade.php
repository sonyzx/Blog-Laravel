@extends('partials.main')

@section('title')
  Login
@endsection

@section('body')

    <div class="col-md-4 col-md-offset-4">
      <form class="" action="{{ route('post_login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Email :</label>
            <input type="text" name="email" class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" class="form-control" value="">
        </div>
        <button type="submit" name="button" class="btn-primary pull-right">Connection</button>
      </form>
    </div>

@endsection
