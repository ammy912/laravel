@extends('crudapp.layout')
@section('title_name')
Contact us Page
@endsection

@section('content')
<section id="content">
        <div class="container-fluid  p-5">
            <h1>Laravel CRUD Applications</h1>
            <hr class="border border-2 border-dark w-25">

            <button type="button" data-bs-toggle="modal" data-bs-target="#aduser" class="btn btn-lg btn-danger"><i class="bi bi-person"></i> Add User</button>
            
  
            <!-- contact us Page -->
            <div class="row">
            <div class="col-md-4 mt-5">
                <address>
                    <p><b>Address </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate earum impedit rem, blanditiis iste nostrum corporis aut culpa atque ea perspiciatis, quam alias voluptatem molestias asperiores sapiente fugiat nesciunt vitae!</p>
                </address>
            </div>
            <div class="col-md-8 mt-5">
                <h1 align="center">Contact Form</h1>
            <hr class="border border-2 border-dark w-25 mx-auto">

            <div class="form-group col-md-8 mx-auto mt-2">
                <!-- success falsh data message -->
                @if(Session("success"))
                <div class="alert alert-success">
                    <span class="text-dark"><strong>Hey!</strong> {{ session('success') }} </span>
                </div>
                @endif

                @if($errors->any())
                
                <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                  @endforeach
                  <ul>
                </div>
                @endif

            </div>    
             <form method="post">
                <!-- csrf : is used to pass a token it meanse secured your form input data while sending on server -->
                @csrf
                <div class="form-group col-md-8 mx-auto mt-2">
                <input type="text" name="name" placeholder="Name *" class="form-control">
                </div>

                
                <div class="form-group col-md-8 mx-auto mt-2">
                    <input type="text" name="email" placeholder="Email *" class="form-control">
                </div>

                
                <div class="form-group col-md-8 mx-auto mt-2">
                    <input type="text" name="phone" placeholder="Phone *" class="form-control">
                </div>

                
                <div class="form-group col-md-8 mx-auto mt-2">
                    <input type="text" name="subject" placeholder="Subject *" class="form-control">
                </div>


                
                <div class="form-group col-md-8 mx-auto mt-2">
                    <textarea type="text" name="message" placeholder="Message *" class="form-control"></textarea>
                </div>

                
                <div class="form-group col-md-8 mx-auto mt-2">
                    <input type="submit" name="sub" class="btn btn-primary btn-lg" value="Send">

                    <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset">
                </div>
             </form>


            </div>

            </div>
         </div>
        </div>
    </section>
@endsection