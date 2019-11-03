


@extends('layouts.template')

@section('content')
<div class="row">
   <div class="col-lg-5">
             <div class="card shadow mb-7 p-4">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registar Users!</h1>
              </div>
              <form class="user" method="post" action="{{url('store-users')}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName" placeholder="Full Name">
                 
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email Address">
                </div>

                <div class="form-group">
                 <select name="category" class="form-control form-control-user" required="">
                   <option value="">Choose User Type</option>
                   <option value="1">Student</option>
                   <option value="2">Mentor</option>
                   <option value="3">Admin</option>
                 </select>
                </div>
                
                <hr>
              <button class="btn btn-primary btn-user btn-block"> Register User</button>
                </div>
                
            </div>
              <div class="col-lg-7">
               <div class="card shadow mb-7">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registered Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                     {{--  <th>Status</th>
                      <th>Action</th> --}}
                   
                    </tr>
                  </thead>
                
                  <tbody>
                    @if(!empty($data))
                    @foreach($data as $set)
                    <tr>
                      <td>{{$set->name}}</td>
                      <td>{{$set->email}}</td>
                    {{--   <td>{{$set->status}}</td>
                      <td>
                        <a href="{{url('editcategory/'.$set->id.'/drop')}}" class="label label-success">Drop</a>
                        <a href="{{url('editcategory/'.$set->id.'/activate')}}" class="label label-success">Activate</a>
                      </td> --}}
                     
                    </tr>
                    @endforeach
                    @endif
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
</div>
       
     
          @endsection
