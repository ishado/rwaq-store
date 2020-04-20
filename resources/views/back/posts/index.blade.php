@extends('back.layouts.master')
@section('title', 'لوحة تحكم الاعلانات')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">الإعلانات</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-left">
                <button type="button" class="btn btn-success">أضافة مستخدم جديد</button>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>العنوان</th>
                                <th>التفاصيل</th>
                                <th>السعر</th>
                                <th>تم البيع</th>
                                <th>المعلن</th>
                                <th>الفئة</th>
                                <th>الدولة</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->post_id}}</td>
                                    <td>{{$post->post_title}}</td>
                                    <td>{{$post->post_text}}</td>
                                    <td>{{$post->post_price}}</td>
                                    <td>{{Form::checkbox('active', null, $post->is_active)}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->category->category_name}}</td>
                                    <td>{{$post->country->country_name}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-xs btn-warning">تعديل</button>
                                            {!! Form::open(array(
                                                'method' => 'DELETE',
                                                'route'  => ['post.destroy', $post->post_id],
                                                'onsubmit' => "return confirm('هل تريد بالفعل حذف السجل')"

                                            )) !!}
                                                <button type="submit" class="btn btn-xs btn-danger">حذف</button>
                                                {!! Form::close() !!}

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="well">

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
