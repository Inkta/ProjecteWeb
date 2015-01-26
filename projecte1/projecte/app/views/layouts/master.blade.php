<html>
    <head>
        <title>
            @section('sidebar')
            Laravel 
            @show
        </title>
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen')) }}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      @yield('style')
      <style>
            body {
                padding-top:100px;
            }
      </style>
      @show
    </head>
    <body>
        <!--Navbar-->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a class="navbar-brand" href="#">Laravel</a>
                    
                </div>
                 <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{{ URL::to('/home') }}}">Home</a></li>
                        @if ( Auth::guest() )
                            <li>{{ HTML::link('login', 'Login') }}</li>
                        @else
                            <li>{{ HTML::link('secret', 'Secret') }}</li>       
                            <li>{{ HTML::link('logout', 'Logout') }}</li>
                        @endif
                    </ul> 
                </div>
            </div>   
        </div>
 
        
        <div class="container">
             <!-- Success-Messages -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{{ $message }}}
                </div>
            @endif

            @yield('content')
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   {{ HTML::script('bootstrap/js/bootstrap.min.js') }}

    </body>
</html>
