@foreach ($posts as $post)
@php
$images = $post->images()->first();
$image_name = $images['image_name'] ?? '';
// {{ $image_name ?? '' }}
@endphp

<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        {{-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a> --}}
        <a href="{{route('product.show',$post->post_id)}}"><img class="card-img-top" style="height:160px; width:250px;"
                src="{{asset('storage/images/'.$image_name)}}" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{route('product.show',$post->post_id)}}">{{$post->post_title}}</a>
            </h4>
            <h5>${{$post->post_price}}</h5>
            <p class="card-text">{{$post->post_text}}
            </p>
        </div>
        <div class="card-footer">
            <small class="text-muted">★ ★ ★ ★ ☆</small>
        </div>
    </div>
</div>

@endforeach
