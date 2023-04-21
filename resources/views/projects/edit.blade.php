@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="py-3 text-uppercase text-center font-weight-bolder text-danger">modifica il lavoro: <br>  {{$project->title}}</h1>
    <div class="row">
        <div class="col-12">
            <form action="{{route("projects.update", $project)}}" method="POST">
              @csrf
              @method("PUT")
        
          <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">TITOLO</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project->title) }}">
                @error('title')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
                <label for="customer" class="col-sm-2 col-form-label">CLIENTE</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('customer') is-invalid @enderror" id="customer" name="customer" value="{{ old('customer', $project->customer) }}">
                  @error('customer')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="url" class="col-sm-2 col-form-label">URL</label>
                <div class="col-sm-10">
                  <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $project->url) }}">
                  @error('url')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
                </div>
              </div>

              <div class="form-floating mb-3">
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert description here" id="description" name="description" style="height: 200px" >{{ old('description', $project->description) }}</textarea>
                    <label class="text-black" for="description">INSERISCI DESCRIZIONE</label>
                    @error('description')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">APPORTA LE MODIFICHE</button>
          </form>
    </div>
</div>
@endsection