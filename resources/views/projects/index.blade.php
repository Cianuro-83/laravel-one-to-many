@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container py-5">
            <div class="d-flex align-items-center">
              <h1 class="me-auto text-uppercase text-warning">i mie lavori</h1>
              <div>
                <a class="btn btn-outline-success text-uppercase fw-bolder" href="{{ route('projects.create') }}">+ add new +</a>
              </div>
            </div>
          </div>
      
          <div class="container text-">
            <table class="table text-white table-responsive table-inverse">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome Progetto</th>
                  <th>Cliente</th>
                  <th>Web</th>
                  <th>Slug</th>
                  <th>Data creazione</th>
                  <th>Data modifica</th>
                  <th></th>
                  
                </tr>
              </thead>
              <tbody>
                @forelse ($projects as $project)
                    <tr>
                      <td>{{ $project->id }}</td>
                      <td>
                        <a href="{{ route('projects.show',$project) }}">{{ $project->title }}</a>
                      </td>
                      <td>{{ $project->customer }}</td>
                      <td>{{ $project->url }}</td>
                      <td>{{ $project->slug }}</td>
                      <td>{{ $project->created_at }}</td>
                      <td>{{ $project->updated_at }}</td>
                      <td>
                        <div class="d-flex ">
                          <a class="btn btn-sm btn-outline-warning mt-3" href="{{ route('projects.edit',$project) }}">MODIFICA</a>
                        </div>
                      </td>
                    </tr>
                @empty
                  <tr>
                    <th colspan="7" class="text-uppercase text-center fw-bolder">Nessun lavoro trovato</th>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
      

    </div>
@endsection