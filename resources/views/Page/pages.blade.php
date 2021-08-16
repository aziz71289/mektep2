<?php
use Illuminate\Routing\Route;
use TCG\Voyager\Models\Page;
?>
@extends('layouts.main')

@section('title')Жаналыклар@endsection

@foreach ($page as $item)
<a href="{{ url('/singlepage/'. $item->slug) }}"><h1>{{$item->title.'<br>'}}</h1></a>
{{--{{$item->excerpt.'<br>'}}--}}
<p>{{$item->body.'<br>'}}</p>

<img src="{{Storage::url($item->image)}}" alt="{{$item->meta_description.'<br>'}}">

{{--{{$item->slug.'<br>'}}--}}
{{--{{$item->meta_keywords}}--}}
@endforeach