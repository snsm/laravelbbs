@extends('app')

@section('content')
    <div class="container">

        @if($errors->any())
            <div class="form-group">
                @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif

    {!! Form::open(['url'=>'/user/register']) !!}
        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation','password_confirmation') !!}
            {!! Form::password('password_confirmation',null,['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('马上注册',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    </div>

    @endsection