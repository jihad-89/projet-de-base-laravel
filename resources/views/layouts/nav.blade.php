<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel 9.X</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url("/")}}">Home</a></li>
            <li><a href="{{url("/apropos")}}">Apropos</a></li>
            <li><a href="{{url("/service")}}">Services</a></li>
             <ul class="nav navcbar-nav navbar-right">
                <li><a href="{{url('/create')}}">Nouveau Produit</a></li>
             </ul>
        </ul>
         <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="#">New product</a></li>
        </ul>-->
    </div>
</nav>