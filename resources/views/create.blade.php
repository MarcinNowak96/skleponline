@extends('layouts.app')
<div class="container">
    <form method="POST" action="{{route('home.store')}}" enctype="multipart/form-data">
        <br class="col-md-12">
        <div class="form-row">
            <div class="form-group col-md-12 col-lg-12">
                <h5>Dodaj aukcje</h5>
                <hr class="colorgraph">
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="name">Nazwa <small class="text-red small-70">(wymagane)</small></label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                               type="text"
                               placeholder="Wpisz nazwe">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="description">Opis <small
                                class="text-red small-70">(wymagane)</small></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" cols="12" rows="5"
                                  id="description" name="description"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group mb-2">
                    <label for="name">Kategoria<small class="text-red small-70">(wymagane)</small></label>
                    <div class="input-group mb-2">
                        <label for="id_category"><select id="id_category" name="id_category"
                                                                 class="form-control @error('id_category') is-invalid @enderror">
                            <option value=""></option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select></label>
                        @error('id_category')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="name">Dodaj zdjęcie</label>
                        <input class="form-control" id="image" name="image"
                               type="file">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12 col-lg-12">
                        <label class="m-0" for="name">Cena <small class="text-red small-70">(wymagane)</small>
                        <input class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                               type="number" placeholder="Wpisz cene"></label>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>


        <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-right my-2">
            <button class="btn btn-primary float-right" type="submit">Utwórz</button>
        </div>
        {{csrf_field()}}
    </form>
</div>

