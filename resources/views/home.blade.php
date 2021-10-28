@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{$title}}
                    <b-button block href="/agres">Agres</b-button>
                    <b-button block href="/elements">Elements</b-button>
                    <b-button block href="/familles">Familles</b-button>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
