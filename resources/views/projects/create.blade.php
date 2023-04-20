@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-3 text-uppercase text-center font-weight-bolder text-warning">aggiungi un nuovo lavoro</h1>
<div class="row">
    <div class="col-12">
        <form action="{{route("projects.store")}}" method="POST">
          @csrf
        
          <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">TITOLO</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
              </div>
            </div>

            <div class="row mb-3">
                <label for="customer" class="col-sm-2 col-form-label">CLIENTE</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer" name="customer" value="{{ old('customer') }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="url" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}">
                </div>
              </div>

              <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Insert description here" id="description" name="description" style="height: 200px" >{{ old('description') }}</textarea>
                    <label class="text-black" for="description">INSERISCI DESCRIZIONE</label>
                      </div>
            {{-- CHECKBOX --}}
                      <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="checkbox">
                        <label class="form-check-label" for="flexCheckDefault">
                          RESTA NELLA PAGINA DI CREAZIONE
                        </label>
                      </div>
            <button type="submit" class="btn btn-primary">AGGIUNGI NUOVO LAVORO</button>
          </form>
    </div>
</div>
@endsection