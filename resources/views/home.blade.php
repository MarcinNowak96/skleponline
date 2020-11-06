@extends('layouts.app')

    <div class="container">

        <h4>Lista produktów:</h4>
        <table class="table simple-table table-striped table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Cena</th>
                <th scope="col">Data dodania</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td data-title="Nazwa">
                        <a href="{{route('product.index',[$product->id])}}">{{$product->name}}</a>
                    </td>
                    <td data-title="Opis">
                        {{$product->description}}
                    </td>
                    <td data-title="Cena">
                        {{number_format($product->price/100,2)}} zł
                    </td>
                    <td data-title="Data dodania">
                        {{$product->created_at}}
                    </td>
                    <td data-title="Opis">
                        <a href="{{route('home.delete', [$product->id])}}">Usuń</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td>{{__('Brak danych w bazie ')}}</td>
                    <td></td>
                </tr>

            @endforelse
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
