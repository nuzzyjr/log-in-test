@extends("layouts.home_layout")

@section('logged_in')
    <button class="btn btn-primary" onclick="location = href='log-out.php'" style="float:right;margin:15px;" >Log out</button>
    <p>
    
    </p>
@endsection

@section('not_logged_in')
  

@endsection
