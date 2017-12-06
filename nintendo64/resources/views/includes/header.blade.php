<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nintendo 64</title>
    <meta name="description" content="Den officiella hemsidan för den officiella Nintendo64-tävlingen">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {!! MaterializeCSS::include_css() !!}
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body>

<nav class="transparent black-text fixed" role="navigation">
    <div class="nav-wrapper container full-width">
        <ul id="slide-out" class="side-nav">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">First</a></li>
                                <li><a href="#!">Second</a></li>
                                <li><a href="#!">Third</a></li>
                                <li><a href="#!">Fourth</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons black-text">menu</i></a>
    </div>
</nav>

@yield('content')



