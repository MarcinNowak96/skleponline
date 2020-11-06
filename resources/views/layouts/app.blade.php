<!DOCTYPE html>

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ale-gro</title>
    <link href="{{'vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
    <link href="{{'css/shop-homepage.css'}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Ale-gro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Strona główna
                    </a>
                </li>
                @foreach($categories as $category)
                    <li>
                        <a class="nav-link" href="{{route('category.index', [$category->id])}}" class="list-group-item">
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.create')}}">Dodaj aukcje</a>
                </li>


            </ul>
        </div>
    </div>
</nav>
