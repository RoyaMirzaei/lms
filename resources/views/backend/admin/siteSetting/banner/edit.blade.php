@extends('backend.admin.partial._master')
@section('main.content')
    <section dir="rtl">

        <section class="container" style="padding: 50px" dir="rtl">
            <section>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </section>
            <section>
                @if (session()->has('banner'))
                    <section class="alert alert-success">
                        <h3>{{ session('banner') }}</h3>
                    </section>
                @endif

            </section>
            {{ Form::model($banner,['route' => ['banner.update',$banner->id], 'method' => 'put','files'=>true])}}
            <section class="form-group">
                {{Form::label('title', 'عنوان : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('title',$banner->title, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('caption', 'توضیحات : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('caption',$banner->caption, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('alt', 'متن مرورگر تصویر : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('alt',$banner->alt, ['class' => 'form-control']) !!}
            </section>
            {!! Form::label('image', 'تصویر : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            <section class="form-group">
                {!! Form::file('image',['class'=>'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('status', 'وضعیت : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::select('status',['active'=>'فعال','inactive'=>'غیر فعال'],$banner->status,['class' => 'form-control']) !!}
            </section>
            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('banner.index')}}"><input type="button" class="form-control btn btn-success"
                                                            style="font-size: 15px;font-family: Tahoma"
                                                            value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection


