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
                @if (session()->has('lesson'))
                    <section class="alert alert-success">
                        <h3>{{ session('lesson') }}</h3>
                    </section>
                @endif

            </section>
            {{ Form::open(['route'=>'lesson.store', 'method' => 'post','files' => true])}}
            <section class="form-group">
                {{Form::label('title', 'عنوان درس : ', ['class' => 'control-label','style'=>'font-size: 15px;'])}}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('levels','پایه :',['class' => 'control-label','style'=>'font-size: 15px;'])}}
                {{Form::select('levels',$levels,null,['class'=>'form-control'])}}
{{--                Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']);--}}
            </section>

            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('lesson.index')}}"><input type="button" class="form-control btn btn-success"
                                                           style="font-size: 15px;font-family: Tahoma"
                                                           value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection


