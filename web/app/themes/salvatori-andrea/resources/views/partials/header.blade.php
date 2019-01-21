<div class="menucontainer" >
<nav role="navigation" aria-label="main navigation" >
    <div>
        <a href="{{ home_url('/') }}"><img class="logo" src="{{ home_url('/app/themes/salvatori-andrea/resources/assets/images/PNG/ahebbo-blanco.png')}}"></a>
    </div>
    @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
    @endif
</nav>

<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
</a> 
<div class="form-header">
    <form  action="">
        <input type="text" placeholder="hola">
        <select name="" id="">hola</select>
        <select name="" id="">hola 2</select>
    </form> 
</div>
</div>
