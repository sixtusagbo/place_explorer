@extends('layouts.base')

@section('content')
    <iframe id="mapFrameElement" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        frameborder="0" src="https://maps.google.com/maps?q={{ urlencode($place) }}&amp;output=embed">
    </iframe>
@endsection
