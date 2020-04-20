@extends('front.layouts.master')
@section('title', 'إضافة اعلان')


@section('content')
<div class="container text-right">
    <div class="col-lg-10">
        <h3>إضافة اعلان جديد</h3>
        <hr>
    </div>

        {!! Form::open(array('files'=>true)) !!}
            <div class="form-group">
                <label>عنوان الاعلان</label>
                {{ Form::text('post_title',null,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label>تفاصيل الاعلان</label>
                {{ Form::textarea('post_text',null,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label>السعر</label>
                {{ Form::text('post_price',null,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label>القسم</label>
                {{ Form::select('category_id',$categories,1,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label>البلد</label>
                {{ Form::select('country_id',$countries,1,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                <label>الصور</label>
                <input type="file" name="images[]" class="form-control" multiple />
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        {!! Form::close() !!}

</div>

@endsection
