<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>rms</title>

    <!-- Bootstrap core CSS -->
    <link href="startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="startbootstrap/css/simple-sidebar.css" rel="stylesheet">
    <link  href="{{ URL::asset('custom/style.css') }}" rel="stylesheet">
</head>

<body>

        <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="/categories" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> 
            </div>
            
        </div>
        <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="startbootstrap/vendor/jquery/jquery.min.js"></script>
        <script src="startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
        </script>

    @yield('content')

</body>

</html>
