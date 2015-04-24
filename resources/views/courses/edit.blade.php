@extends('layouts.app')

@section('title', 'Register')

@section('styles') @endsection

@section('inline-styles') @endsection

@section('inline-scripts') @endsection

@section('content-header')
    <h1>
        Edit
        <small>{{ Inspiring::quote() }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
@endsection

@section('content')
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Register</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($course, ['method' => 'PUT', 'route' => ['courses.update', $course->id], 'role' =>
        'form']) !!}
        {!! Form::hidden('id', $course->id) !!}

        <div class="box-body">
            <div class="form-group @if($errors->first('name')) has-error @endif">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
                {!! $errors->first('name', '<label>:message</label>') !!}
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div><!-- /.box -->
    <!-- /.box -->

@endsection
