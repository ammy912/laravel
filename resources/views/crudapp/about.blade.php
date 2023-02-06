@extends('crudapp.layout')
@section('title_name')
Home Page
@endsection

@section('content')
<section id="content">
        <div class="container-fluid  p-5">
            <h1>Laravel CRUD Applications</h1>
            <hr class="border border-2 border-dark w-25">

            <button type="button" data-bs-toggle="modal" data-bs-target="#aduser" class="btn btn-lg btn-danger"><i class="bi bi-person"></i> Add User</button>
      
            <!-- About us Page -->
            <div class="mt-5">
               
            <h1>About Us</h1>
            <p align="justify"> <img src="{{asset('crudapp/assets/images/av.jpg')}}" class="img-fluid" style="width: 15%; border-radius: 50%; height: 200px; float: left; padding: 10px;"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, eum minus dolor reiciendis repudiandae totam architecto veniam fugiat odio adipisci, dolore, atque deserunt rem optio vel aliquid. Magni, ratione corporis.</p>
  

         </div>
        </div>
    </section>
@endsection