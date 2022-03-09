@extends('layouts.main')

@section('title', 'Register')

@section('content')

  <div class="allcontent">
    <div class="background-image">

    </div>
    <div class="form-content">
      <form class="" action="register/" method="POST">
        <div class="field">
          <input type="text" name="" placeholder="Nickname">
        </div>
        <div class="field">
          <input type="text" name="" placeholder="Email">
        </div>
        <div class="field">
          <input type="text" name="" placeholder="Password">
        </div>
        <div class="field">
          <input type="text" name="" placeholder="Confirm Password">
        </div>
        <div class="field">
          <input type="submit" name="" value="Submit">
        </div>
      </form>
    </div>
  </div>

@endsection
