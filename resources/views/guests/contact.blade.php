@extends('layouts.app')
@section('content')

<div class="blog-wrapper contact">
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="message">Message:</label>
        <div class="col-sm-10">          
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
      </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </form>

  @endsection