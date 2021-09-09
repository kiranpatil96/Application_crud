@extends('front_end.layout')
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">

        <!-- <a href="#" class="btn btn-danger">Back</a> -->
      </div>
      <div class="card-body">
        <form action="{{url('post-data')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
            <label for="fname">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="" placeholder="Enter Fisrtname">
        </div>

        <div class="form-group">
            <label for="lname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="" placeholder="Enter Lastname">
        </div>

        <div class="form-group">
            <label for="email">Email Id</label>
            <input type="text" name="email" class="form-control" id="" placeholder="Email">
        </div>

        <div class="form-group">
          <label class="form-check-label">Gender</label><br>
            Male<input type="radio" class="form-check-input" name="gender">&nbsp&nbsp
            Female<input type="radio" class="form-check-input" name="gender">

        </div>

        <div class="form-group">
            <label for="number">Phone number</label>
            <input type="text" name="mobile_number" class="form-control" id="" placeholder="Enter Number">
        </div>

        <div class="form-group">
            <label for="email">Address</label>
            <input type="text" name="address" class="form-control" id="" placeholder="Enter Address">
        </div>

        <div class="form-group">
            <label for="image">profile image</label>
            <input type="file" name="image" class="form-control" id="" placeholder="profile image">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>
