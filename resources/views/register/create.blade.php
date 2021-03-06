@extends('layouts.master')

@section('content')

    <h2>Register</h2>

    <hr>

    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" name="age">
        </div>
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
