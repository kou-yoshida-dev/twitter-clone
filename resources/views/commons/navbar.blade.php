<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Microposts</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            @if(Auth::check())
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">UESR</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><a class="dropdown-link" href="#">My profile</a></li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                    </ul>
                </li>
            </ul>
            
            
            @else
            <ul class="navbar-nav">
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('signup.get','signup',[],['class'=>'nav-link'])  !!}</li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item">{!! link_to_route('login','login',[],['class'=>'nav-link']) !!}</li>
            </ul>
            
            
            @endif
            
        </div>
        
        
        
    </nav>
</header>