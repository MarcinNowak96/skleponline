<table class="table simple-table table-striped table-sm">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Zdjęcie</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Opis</th>
        <th scope="col">@sortablelink('brutto','Cena')</th>
        <th scope="col">@sortablelink('created_at','Data dodania')</th>
        <th scope="col">Akcje</th>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $product)
        <tr>
            <td data-title="Obrazek">
                @if($product->image != null)
                    <a href="{{route('product.index',[$product->id])}}"><img height="50" src="/uploads/product/{{$product->image}}"></a>
                @endif
            </td>
            <td data-title="Nazwa">
                <a href="{{route('product.index',[$product->id])}}">{{$product->name}}</a>
            </td>
            <td data-title="Opis">
                {{$product->description}}
            </td>
            <td data-title="Cena">
                {{number_format($product->brutto/100,2)}} zł
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
            <td></td>
            <td></td>
            <td>Brak danych w bazie</td>
            <td></td>
            <td></td>
        </tr>
    @endforelse
    </tbody>
</table>
