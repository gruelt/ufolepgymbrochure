@extends('layouts.app')

@section('content')





                            <b-row style="background-color: {{$agres->color}};" class="title">
                                <b-button href="{{route('agres.index')}}"> <b-icon-arrow-left></b-icon-arrow-left>Retour</b-button>
                                        <b-col >

                                            <img src="https://ufolepbrochure.s3.eu-west-3.amazonaws.com/{{$agres->image}}" width="75"  alt="Responsive image"></img>

                                        </b-col>


                                <b-col ><div class="white_title" >{{$agres->description}}</div></b-col>
                                <b-col><b-button v-if="'{{Auth()->user()->role->name}}' === 'admin'" variant="success" squared href="{{route('agres.elements.create',$agres->id)}}">+</b-button></b-col>
                            </b-row>

                            <elements-table :role="'{{Auth()->user()->role->name}}'" :elements="{{json_encode($elements)}}" :agres="{{$agres->id}}"></elements-table>

                           <b-row>
{{--                               <b-table striped hover :items="{{json_encode($elements)}}">--}}

                               </b-table></b-row>





@endsection
