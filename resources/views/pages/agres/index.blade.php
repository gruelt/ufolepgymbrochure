@extends('layouts.app')

@section('content')


                            <b-row v-for="agre in {{json_encode($agres)}}" :style="'background-color:' + agre.color" >

                                <b-col >
                                    <b-link :href="'/agres/'+agre.id" class="agres link">
                                    <img :src="'https://ufolepbrochure.s3.eu-west-3.amazonaws.com/' + agre.image" width="75"  center alt="Responsive image" :href="'/agres/'+agre.id"></img>
                                    </b-link>
                                </b-col>
                                <b-link :href="'/agres/'+agre.id" class="agres link">
                                <b-col v-html="agre.description" class="agres title"></b-col>
                                </b-link>



                            </b-row>





@endsection
