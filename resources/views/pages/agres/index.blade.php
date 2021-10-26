@extends('layouts.app')

@section('content')


                            <b-row v-for="agre in {{json_encode($agres)}}" :style="'background-color:' + agre.color" :href="'/agres/'+agre.id">

                                <b-col >

                                    <img :src="'https://ufolepbrochure.s3.eu-west-3.amazonaws.com/' + agre.image" width="75"  center alt="Responsive image" :href="'/agres/'+agre.id"></img>

                                </b-col>

                                <b-col v-html="agre.description" class="agres title"></b-col>

                                <b-col><b-link :href="'/agres/'+agre.id" class="agres link"> > </b-link></b-col>

                            </b-row>





@endsection
