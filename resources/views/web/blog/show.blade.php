@extends('web.layout')
@section('content')
<x-alert class="mb-4" type='error':message='$post->title' <date-id='1' date-priority='medium'/>
<x-web :post='$post' class="bg-red-400"/>
@endsection
