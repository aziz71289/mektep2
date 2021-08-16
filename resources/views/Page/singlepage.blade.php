<?php
use Illuminate\Routing\Route;
use TCG\Voyager\Models\Page;
?>
@extends('page')

@section('title')жаналык@endsection


@foreach ($page as $item)
    <h1>{{$item->title.'<br>'}}</h1>
    {{--{{$item->excerpt.'<br>'}}--}}
    <p>{{$item->body.'<br>'}}</p>

    <img src="{{Storage::url($item->image)}}" alt="{{$item->meta_description.'<br>'}}">

    {{--{{$item->slug.'<br>'}}--}}
    {{--{{$item->meta_keywords}}--}}
@endforeach