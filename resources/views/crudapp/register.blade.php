@extends('crudapp.layout')
@section('title_name')
Register page
@endsection

@section('content')
<!-- contact start here-->
<div class="container content mt-2">
    <h1 class="text-center">Create account here<i class="bi bi-person-fill"></i></h1>
    
    <!-- Register form -->

    <div class="col-md-6 mx-auto">
    <div class="card mt-2">
      <div class="card-header"></div>
    <div class="card-body">
      <!-- success flash data message -->
      @if(Session("success"))
      <div class="alert alert-success">
        <span class="text-dark"><strong>Hey!</strong>{{session('success')}}</span>
      </div>
      @endif
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
    <div class="row">
   
        <form method="post" id="frm">
          @csrf
        
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="name" placeholder="Name *"  class="form-control">
          </div>
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="text" name="email" placeholder="Email *"  class="form-control">
                  </div>
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="password" name="pass" placeholder="Password *"  class="form-control">
                  </div>
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="password" name="cpass" placeholder="Confirm Password *"  class="form-control">
                  </div>
                 
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="text" name="phone" placeholder="mobile *"  class="form-control">
                  </div>
        
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <textarea name="address" placeholder="Address *" class="form-control"></textarea>
                  </div>
                
        
                  
        
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <input type="submit" name="reg" class="btn btn-lg btn-success" value="Sent">
                    <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
                  
                  </div>
        
                  
                  <div class="form-group mt-2 col-md-8 mx-auto">
                    <b class="">Already have an account ?<a href="<?php $mainurl;?>login-us"> Login here?</a></b>  
                </div>
        
        
                    </form>
        

                
            </div>
            </div>
        </div>
    </div>
</div>
        </div> 
        </div> 

 @endsection