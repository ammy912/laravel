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
            
            <button type="button" class="btn btn-lg btn-primary float-end"><i class="bi bi-person"></i> Login User</button>
            <!-- manage all users -->
            <div class="mt-5">
           <table id="mytab" class="mt-5 table table-responsive table-hover">
            <thead>
                <tr>
                <th>#</th>
                <th>name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>photo</th>
                <th>Address</th>
                <th>Country</th>
                <th>state</th>
                <th>City</th>
                <th>Dob</th>
                <th>RegisterDate</th>
                <th>Action</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>1001</td>
                <td>
                    <div class="w-100" style="min-width: 150px;">
                                            <a href="#" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a> | <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> | <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                        </div>
                                        </td>
               </tr> 
               </tbody>
           </table>
         </div>
        </div>
    </section>
@endsection