@extends('layouts/app')
@section('mainContain')
<h2>Register</h2>
<form method="POST" action="/register">
    <div class="form-group">
    <label for="country">Country</label>
    <input type="text" class="form-control" id="country" name="country">
    </div>

    <div class="form-group">
    <label for="company">Company/Organization</label>
    <input type="text" class="form-control" id="company" name="company">
    </div>

    <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName">
    </div>

    <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName">
    </div>

    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
    <label for="phone">Telephone</label>
    <input type="text" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
    <button style="cursor:point" type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection