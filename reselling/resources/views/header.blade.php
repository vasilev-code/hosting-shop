@section('header')
<header class="header"><!-- Header begin -->
                        <nav class="navbar navbar-expand-lg">  
                            <a class="navbar-brand" href="#">GUARD HOSTING</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">     
                                <ul class="navbar-nav mr-4">
                                    <li class="nav-item">
                                        <a class="nav-link" data-value="about" href="{{route('register')}}">Регистрация</a>
                                        <a class="nav-link" data-value="about" href="{{route('login')}}">Войти</a>
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Выйти') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                                        <a class="nav-link" data-value="about" href="#">Корзина</a>
                                        
                                    </li>  
                                </ul> 
                            </div>
                        </nav>
                    </header><!-- Header end -->

                    
        