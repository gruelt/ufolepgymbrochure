@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <div>

                                <b-row>
                                    <b-col cols="6">
                                    <div v-for="agre in {{json_encode($agres)}}" :style="'color:white;padding:40px;margin:5px;background-color:'+agre.color">

                                            <H2><a :href="'agres/'+agre.id"><span v-html="agre.description"></span></a></H2>
                                    </div>
                                    </b-col>
                                </b-row>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
