@extends('layouts.app')

@section('content')
        @IF(isset($info))
            {{$info}}
            @endif
        {!! form($form) !!}




@endsection
