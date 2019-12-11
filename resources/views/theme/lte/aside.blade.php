<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 static-left fixed-left">
    <!-- Brand Logo -->
    <a href="{{asset (" assets/lte/index3.html ")}}" class="brand-link">
        <img src="{{asset (" assets/lte/dist/img/AdminLTELogo.png ")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset (" assets/lte/dist/img/user2-160x160.jpg ")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="right badge badge-success"> Hola {{session()->get('user_name')?? 'Invitado'}} </span> </br>
                <span class="right badge badge-info"> {{session()->get('role_name')}} </span>
            </div>
            <div class="pull-right">
                <a href="{{route('logout')}}" class="nav-icon fas fa-sign-out-alt"></a>
            </div>
        </div>
        <!--si->el usuario es....-->
        
    @include("menus/menu_administrador");
       
        

        <!-- Sidebar Menu -->

    </div>
    <!-- /.sidebar -->
</aside>