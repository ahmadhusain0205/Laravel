@extends('layout/main')

@section('judul', 'Library')

@section('container')
<div class="container">
    <div class="card shadow mb-4 col-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="mt-3"><b class="text-primary">User List</b>
                    </h4>
                    <ul class="list-group">
                        @foreach($user as $u)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$u->username}}
                            <a href="/User/{{ $u->id }}" class="btn btn-primary" type="button">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg> Detail
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection