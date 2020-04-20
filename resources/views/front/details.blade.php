@extends('front.layouts.master')
@section('title', 'تفاصيل')

@section('content')

@php
    $images = $post->images()->first();
    $image_name = $images->image_name;

    // dd($images);
@endphp

<div class="container text-right" style="margin-bottom:20px">
    <h3 class="card-title">{{$post->post_title}}</h3><hr>
    <div class="card mt-4">
        <img class="card-img-top img-fluid" src="{{ asset('storage/images/'. $image_name) }}" onerror="this.onerror=null;this.src='storage/images/default.jpg'; " alt="image">
        <div class="card-body">
            <h4>المعلومات الرئيسية</h4>
            <p class="card-text">أسم المعلن : {{$post->user->name}}</p>
            <p class="card-text">البلد : {{$post->country->country_name}}</p>
            <p class="card-text">السعر : {{$post->post_price}}</p>
            <h4>وصف الاعلان</h4>
            <p class="card-text">{{$post->post_text}}</p>
        </div>
    </div>
</div>


@endsection
