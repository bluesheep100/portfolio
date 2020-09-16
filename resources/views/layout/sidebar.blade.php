<div class="sidebar">
    <div class="sidebar-menu">
        <a href="{{ url('/') }}" class="sidebar-link @if(request()->route()->named('welcome')) active @endif">
            Welcome
        </a>

        <h5 class="sidebar-title">Projects</h5>
        <a href="{{ route('portfolio') }}" class="sidebar-link @if(request()->route()->named('portfolio')) active @endif">
            This site (Portfolio)
        </a>
        <a href="{{ route('rubiks_cube') }}" class="sidebar-link @if(request()->route()->named('rubiks_cube')) active @endif">
            Rubiks Cube
        </a>
        <a href="{{ route('mvc_lite') }}" class="sidebar-link @if(request()->route()->named('mvc_lite')) active @endif">
            MVC-lite
        </a>
    </div>
</div>
