@extends('layouts.app')

@section('content')





                            <b-row style="background-color: {{$agres->color}}">

                                        <b-col >

                                            <img src="https://ufolepbrochure.s3.eu-west-3.amazonaws.com/{{$agres->image}}" width="75"  alt="Responsive image"></img>

                                        </b-col>

                                    <b-col >{{$agres->description}}</b-col>

                            </b-row>

                           <b-row> <b-table striped hover :items="{{json_encode($elements)}}"></b-table></b-row>





@endsection
