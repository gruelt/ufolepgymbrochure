@extends('layouts.app')

@section('content')

    <b-button href="{{$back_url}}">Retour</b-button>

        @IF(isset($info))
            {{$info}}
            @endif
        @IF(isset($image))
            {!! $image !!}
        @endif
        {!! form($form) !!}




@endsection
