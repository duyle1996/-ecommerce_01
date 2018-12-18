<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    {{ Html::style(asset('css/frontend/bootstrap.min.css')) }}
    {{ Html::style(asset('css/frontend/slick.css')) }}
    {{ Html::style(asset('css/frontend/slick-theme.css')) }}
    {{ Html::style(asset('css/frontend/nouislider.min.css')) }}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    {{ Html::style(asset('css/frontend/style.css')) }}

</head>

<body>
    <header>
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i>@lang('messages.phone')</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> @lang('messages.email')</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i>@lang('messages.address')</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @auth
                    <li><a href="#"><i class="fas fa-user"></i>@lang('messages.adminpage')</a></li>
                    <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                        <div class="dropdown-content bg-dark">
                            <a>
                                @lang('messages.logout')
                            </a>

                            {!! Form::open(['route' => 'logout', 'method' => 'POST', 'id' => 'logout-form',
                                'style' => 'display: none']) !!}
                            {!! Form::close() !!}
                        </div>
                    </li>
                    @else
                    <li><a href="#"><i class="fas fa-user"></i>@lang('messages.login')</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>@lang('messages.register')</a></li>
                    @endauth
                </ul>
            </div>
        </div>
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="{{ asset('frontend/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search">

                            {!! Form::open() !!}
                                <select class="input-select">
                                    <option value="0">@lang('allcategory')</option>
                                        @for ($i = 0; $i < count($menus); $i++) 
                                            @if ($menus[$i]->parent_id===0)
                                                <option value="1">{!! $menus[$i]->name !!}</o>
                                            @endif
                                        @endfor
                                </select>

                            {{Form::text('search', trans('messages.searchhere'), ['class'=>'input'])}}
                                {{ Form::submit(trans('messages.search'), ['class' => 'search-btn']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>@lang('messages.yourcart')</span>
                                    <div class="qty">3</div>
                                </a>
                            </div>

                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>@lang('messages.menu')</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="active dropdown"><a href="#">@lang('messages.trangchu')</a>
                    </li>
                    @for ($i = 0; $i < count($menus); $i++) 
                        @if ($menus[$i]->parent_id === 0)
                            <li class="dropdown"><a href="#">{{ $menus[$i]->name }}</a>
                                <div class="dropdown-content">
                                    @for ($j = 0; $j < count($menus); $j++) 
                                        @if ($menus[$j]->parent_id===$menus[$i]->id)
                                            <a href="#">{{ $menus[$j]->name }}</a>
                                        @endif
                                    @endfor
                                </div>
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </nav>
    {{ Html::script(asset('js/clicklogout.js')) }}
</body>

</html>
