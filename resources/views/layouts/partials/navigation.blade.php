<div class="header">
    <div class="search">
        <form action="{{route('prosearch')}}" method="POST">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <i class="glyphicon glyphicon-search" aria-hidden="true"></i><input type="text" value="Search Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here';}" required="">
            <button type="submit" class="btn btn-success">查詢</button>
        </form>
    </div>
    <div class="logo">
        <a href="index.html">Seafaring <span>A Travel Agency</span></a>
    </div>
    <div class="logo-right">
        <ul>
            <li><a href="mailto:info@example.com">mail@example.com</a></li>|
            <li>Contact Us</li>|
            <li>+0297 889 908</li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="{{ route('about') }}">About</a></li>
                        <li class="active"><a href="{{ route('codes') }}">Short Codes</a></li>
                        <li class="active"><a href="{{ route('services') }}">Services</a></li>
                        <li class="active"><a href="{{ route('photo') }}">Photo Gallery</a></li>
                        <li class="active"><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li class="active"><a href="{{ route('prolist') }}">商品列表</a></li>
                        <li class="active"><a href="{{ route('stolist') }}">店家列表</a></li>
                        <li class="active"><a href="{{ route('change_password') }}">change_password</a></li>
                    </ul>
                </nav>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner1">
</div>