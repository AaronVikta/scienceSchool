@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <h2 class="text-center">Admission Page</h2>
        <p class="text-center">Please ensure that you logon to this admission panel with your personal account,
          for better data Management
        </p>
        @if(Auth::user()->type=="student")
          <admission-component></admission-component>
        @endif
      </div>
    </div>
  </div>
@endsection
