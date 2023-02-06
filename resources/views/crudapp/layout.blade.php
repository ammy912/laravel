<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Laravel CRUD app::@yield('title_name')</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- stylesheet of bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('crudapp/assets/css/style.css')}}">
<!-- datables css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<!-- javascript load here -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <!-- header -->
    <section id="header" class="p-3">
        <!-- grid management of bootstrap -->
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <b>Call Us :(+91)-9998003879</b>
            </div>
            <div class="col-md-5 col-sm-5">
                <form method="post">
                    <input type="text" name="search" placeholder="Search here!" class="form-control">
                </form>
            </div>
            <div class="col-md-3 col-sm-4">
                <button type="button" data-bs-toggle="modal" data-bs-target="#aduser" class="btn btn-sm btn-danger"><i class="bi bi-person"></i> Add User</button> &nbsp; &nbsp;
                &nbsp;
                <i class="bi bi-instagram"></i> &nbsp;
                <i class="bi bi-whatsapp"></i> &nbsp;
                <i class="bi bi-twitter"></i> &nbsp;
                <i class="bi bi-facebook"></i> &nbsp;
                <i class="bi bi-youtube"></i> &nbsp;   
            </div>
        </div>
    </section>
    <!-- navbar -->
    <section id="navbar">
        <nav class="navbar navbar-expand-md p-3 bg-primary">
            <a href="#" class="navbar-brand">My App</a>
            <!-- main navbar -->
             <ul class="navbar-link">
    
                </li>
                <li><a href="/">Home</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Feedback</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><a href="/register">Account</a></li>
               
            </ul>
        </nav>
    </section>
    <!-- content -->
   @yield("content")
   
    <!-- footer -->
    <section id="footer">
        <div class="container-fluid  bg-primary p-5" style="text-align: center;">
         Copyight @ 2023 All right reserved.
        </div>
    </section>
    
  <!-- add users modal -->

  <div class="modal fade" role="dialog" id="aduser">
    <div class="modal-dialog">
        <div class="modal-content p-5">
            <h3><i class="bi bi-person-add"></i> Add User Forms <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">&times;</button></h3>
            <hr class="border border-2 border-dark w-50">

        </div>
    </div>
  </div>

<script>
$(document).ready(function () {
    $('#mytab').DataTable();
});
</script>
</body>
</html>