@extends('layouts.app')

<div class="container">
    <h4>Lista produktów z kategorii: {{$category->name}}</h4>
    @include('layouts.table')
    @include('layouts.footer')
</div>
