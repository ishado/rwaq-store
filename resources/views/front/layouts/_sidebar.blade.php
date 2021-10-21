<div class="col-lg-3 text-right">
    <h1 class="my-4" style="color:#563d7c">الأقسام</h1>
    <div class="list-group ">
        @foreach ($categories as $category)
        <a href="/category/{{$category->category_id}}" class="list-group-item">{{$category->category_name}}</a>
        @endforeach
    </div>
</div>
<!-- /.col-lg-3 -->
