@extends('layouts.app')

<div class="container">
    <form id="create-form" method="get"
          action="{{route('home.store')}}">
        <br class="col-md-12">
        <div class="form-row">
            <div class="form-group col-md-12 col-lg-12">
                <h5>Dodaj aukcje</h5>
                <hr class="colorgraph">
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="name">Nazwa <small
                                class="text-red small-70">(wymagane)</small></label>
                        <input class="form-control"
                               id="name"
                               name="name"
                               type="text"
                               placeholder="Wpisz nazwe">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="description">Opis <small
                                class="text-red small-70">(wymagane)</small></label>
                        <textarea class="form-control" cols="12" rows="5"
                               id="description"
                               name="description">

                        </textarea>
                    </div>
                </div>
                <div class="input-group mb-2">
                    <label for="name">Kategoria</label>
                    <div class="input-group mb-2">
                        <select id="id_category" name="id_category" class="form-control">
                            <option value="">Wszystkie</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                @if(isset($_GET['id_category']))
                                    {{ $_GET['id_category'] == $category->id ? 'selected' : '' }}
                                    @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="name">Cena <small
                                class="text-red small-70">(wymagane)</small></label>
                        <input class="form-control"
                               id="price"
                               name="price"
                               type="number"
                               placeholder="Wpisz cene">
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-right my-2">
                <button class="btn btn-primary float-right" type="submit">Utwórz</button>
            </div>
        </div>
    </form>
</div>

@include('layouts.footer')
