<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
@if( Auth::user()->cargo=='administrador' )
<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Usuarios</p>
    </a>
</li>
@endif