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
            <table class="table  text-white table-responsive table-inverse">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome Progetto</th>
                  <th>Cliente</th>
                  <th>Web</th>
                  <th>Slug</th>
                  <th>Data creazione</th>
                  <th>Ultima modifica</th>
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
                      <td>{{ $project->created_at->format('d/m/y') }}</td>
                      <td>{{ $project->updated_at->format('d/m/y') }}</td>
                      <td>
                        <div class="d-flex ">
                          <a class="btn btn-sm btn-outline-warning mt-3 me-1" href="{{ route('projects.edit',$project) }}">MODIFICA</a>
                          <form action="{{route('projects.destroy', $project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="ELIMINA" class="btn btn-sm btn-outline-danger mt-3 ms-1">
                          </form>
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