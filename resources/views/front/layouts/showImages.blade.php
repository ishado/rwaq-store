@foreach ($posts as $post)
    @php
        $images = $post->images()->first();
        $image_name = $images['image_name'];
    @endphp
    <div class="col-lg-4 col-md-6 mb-4 text-right">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" height="150px" src="{{asset('storage/images/'.$image_name)}}" onerror="this.onerror=null;this.src='storage/images/default.jpg'; " alt="image" ></a>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="">{{$post->post_title}}</a>
                </h5>
                <h6>{{$post->post_price}}</h6>
            </div>
        </div>
    </div>

@endforeach
