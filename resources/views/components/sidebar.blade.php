<div class="sidebar">
        <button class="btn btn-action d-lg-none ml-15 mt-15" type="button" onclick="halfmoon.toggleSidebar();">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    <div class="sidebar-menu">
        <a href="{{ url('/') }}" class="sidebar-link @if(request()->route()->named('welcome')) active @endif">
            Welcome
        </a>

        <h3 class="sidebar-title">Projects</h3>
        <a href="{{ route('portfolio') }}" class="sidebar-link @if(request()->route()->named('portfolio')) active @endif">
            This site (Portfolio)
        </a>
        <a href="{{ route('rubiks_cube') }}" class="sidebar-link @if(request()->route()->named('rubiks_cube')) active @endif">
            Rubik's Cube
        </a>
        <a href="{{ route('mvc_lite') }}" class="sidebar-link @if(request()->route()->named('mvc_lite')) active @endif">
            MVC-lite
        </a>
    </div>
</div>
