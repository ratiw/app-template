<div class="ui">
  <div class="ui secondary pointing inverted blue menu">
    <a class="toc item">
        <i class="sidebar icon"></i>
    </a>
    <a class="active item">Home</a>
    <a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>
    <div class="right menu">
        @if (Auth::check())
            <div class="ui dropdown item">
                {{ Auth::user()->name }}
                <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item"><i class="user icon"></i>Profile</a>
                    <div class="divider"></div>
                    <a class="item" href="#logout"><i class="sign out icon"></i>Logout</a>
                </div>
            </div>
        @else
            <div class="item">
                <a class="ui inverted button" href="#login">Log in</a>
                <a class="ui inverted button" href="#register">Sign Up</a>
            </div>
      @endif
    </div>
  </div>
</div>
