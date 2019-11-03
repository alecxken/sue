


@extends('layouts.template')

@section('content')

        <div class="col-lg-8">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registar Users!</h1>
              </div>
              <form class="user" method="post" action="{{url('store-users')}}">
              	@csrf
                <div class="form-group row">
                    <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName" placeholder="Full Name">
                 
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                </div>

                <div class="form-group">
                 <select name="category" class="form-control" required="">
                   <option value="">Choose User Type</option>
                   <option value="1">Student</option>
                   <option value="2">Mentor</option>
                   <option value="3">Admin</option>
                 </select>
                </div>
             
                </div>
                  <button class="btn btn-primary btn-user btn-block"> Register Account</button>


              
                <hr>
                
            </div>
     
          @endsection
