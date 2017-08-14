@extends('layouts.master')

@section('content')

    <h2>Login</h2>

    <hr>

    <form method="POST" action="/login">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="title">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


    @include('partials.errors')


@endsection
