@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    welcome {{Auth::user()->name}}.
                </div>
            </div>
            @if(Auth::user()->type == 'admin')
              <div class="mt-2">
                <h3 class="text-center">Upload Excel Documents</h3>
                @if(session('errors'))
                  @foreach ($errors as $error)
                    <span class="text-danger">* {{$error}}</span>
                  @endforeach
                @endif
                @if(session('success'))
                  {{session('success')}}
                @endif
                <form class="" action="/import" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="file" name="file" value="" placeholder="Upload Excel" required>
                  <input type="submit" class="" name="" value="Upload Excel">
                </form>
              </div>
            @endif
        </div>
    </div>
</div>
@endsection
