<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Army FC Ministry National Defense Football Club </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{Url('')}}/bootstrap.min.csssdxss">
    <link href="{{ url('') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('ckeditor/js/sample.js') }}"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .breadLine{ text-align: center;  color: green;   margin-bottom: -30px;}
        #cke_1_contents{height: 300px !important;}
    </style>
</head>
<body id="app-layout" style="">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container col-sm-12">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('admin/home') }}">
                    {{ trans('back/admin.ADMIN_HOME')}}
                </a>
            </div>		
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/category/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Categories Add</a> </li>
                            <li><a href="{{ url('admin/category/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Categories List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Position 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/position/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Position Add</a> </li>
                            <li><a href="{{ url('admin/position/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Position List</a></li>
                            <li> <a href="{{ url('admin/slid/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Slid Add</a> </li>
                            <li><a href="{{ url('admin/slid/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Slid List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Post News 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/article/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> News Add</a> </li>
                            <li><a href="{{ url('admin/article/') }}"> <i class="fa fa-btn fa fa-navicon"></i> News List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Product  
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/product/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> News Add</a> </li>
                            <li><a href="{{ url('admin/product/') }}"> <i class="fa fa-btn fa fa-navicon"></i> News List</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">    Profile
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/profile/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Profile Add</a> </li>
                            <li><a href="{{ url('admin/profile/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Profile List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Team  
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/team/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Team Add</a> </li>
                            <li><a href="{{ url('admin/team/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Team List</a></li>
                            <li><a href="{{ url('admin/player/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Payers Add</a></li>
                            <li><a href="{{ url('admin/player/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Payers List</a></li>
                            <li><a href="{{ url('admin/gallery/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Gallery Add</a></li>
                            <li><a href="{{ url('admin/gallery/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Gallery List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Team Match  
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/match/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> Team Match Add</a> </li>
                            <li><a href="{{ url('admin/match/') }}"> <i class="fa fa-btn fa fa-navicon"></i> Team Match List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> League  
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> <a href="{{ url('admin/league/add') }}"> <i class="fa fa-btn fa fa-navicon"></i> League Add</a> </li>
                            <li><a href="{{ url('admin/league/') }}"> <i class="fa fa-btn fa fa-navicon"></i> League List</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" style="margin-bottom:0;">
                    <!-- Authentication Links -->                 
			<li class="dropdown">
                            <a href="{{ url('/') }}" target="_blank" > View Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user">  </i> Admin <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="{{ url('/admin/setting') }}"><i class="fa fa-gear"> </i> Setting</a></li>
                                 <li><a href="{{ url('/admin/user/add') }}"><i class="fa fa-plus-circle"> </i> Add Users</a></li>
                                 <li><a href="{{ url('/admin/user') }}"><i class="fa fa-user"> </i > List Users</a></li>
                                <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
	initSample();
    </script> 
</body>
</html>
