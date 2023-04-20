@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center py-5">
        <div class="me-auto">
            <h1>{{ $project->title }}</h1>
            <p>/{{ $project->slug }}</p>
        </div>

        <div>
            <a class="btn btn-sm btn-outline-warning mt-3" href="{{ route('projects.edit',$project) }}">MODIFICA</a>
        </div>
        
    </div>
</div>
<div class="container">
    <p>
        {{ $project->description }}
    </p>
</div>
@endsection