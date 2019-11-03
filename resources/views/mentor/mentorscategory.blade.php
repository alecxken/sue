


@extends('layouts.template')

@section('content')

<div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Mentorship Category</h1>
              </div>
              <form class="user" method="post" action="{{url('store-category')}}">
              	@csrf
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name"  placeholder="Category Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="desc" placeholder="Description">
                  </div>
                   <div class="col-sm-2">
                      <button class="btn btn-primary btn-user btn-block"> Add Category</button>
                  </div>
                </div>
       
              </form>
              
                <hr>
                
            </div> 
          </div>
<div>
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Mentorship Category</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                   
                    </tr>
                  </thead>
                
                  <tbody>
                    @if(!empty($data))
                    @foreach($data as $set)
                    <tr>
                      <td>{{$set->name}}</td>
                      <td>{{$set->desc}}</td>
                      <td>{{$set->status}}</td>
                      <td>
                        <a href="{{url('editcategory/'.$set->id.'/drop')}}" class="label label-success">Drop</a>
                        <a href="{{url('editcategory/'.$set->id.'/activate')}}" class="label label-success">Activate</a>
                      </td>
                     
                    </tr>
                    @endforeach
                    @endif
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
          @endsection
