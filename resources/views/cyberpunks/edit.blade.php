@extends('layouts.app')

@section('title', 'Edit')

@section('styles')
    <link href="{!! asset('packages/bower/select2/dist/css/select2.min.css') !!}" rel="stylesheet" type="text/css">
@endsection

@section('inline-styles') @endsection

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
            <h3 class="box-title">Edit</h3>
            @include('cyberpunks._toolbox')
        </div><!-- /.box-header -->
        <!-- form start -->
        {!! Form::model($cyberpunk, ['method' => 'PUT', 'route' => ['cyberpunks.update', $cyberpunk->id], 'role' =>
        'form']) !!}
        {!! Form::hidden('id', $cyberpunk->id) !!}

        <div class="box-body">
            <div class="form-group @if($errors->first('name')) has-error @endif">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
                {!! $errors->first('name', '<label>:message</label>') !!}
            </div>
            <div class="form-group @if($errors->first('email')) has-error @endif">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
                {!! $errors->first('email', '<label>:message</label>') !!}
            </div>
            <div class="form-group @if($errors->first('deree_student_id')) has-error @endif">
                {!! Form::label('deree_student_id', 'DEREE ID:') !!}
                {!! Form::text('deree_student_id', null, ['class' => 'form-control', 'placeholder' => 'Enter ...']) !!}
                {!! $errors->first('deree_student_id', '<label>:message</label>') !!}
            </div>

            <div class="form-group @if($errors->first('courses')) has-error @endif">
                {!! Form::label('courses[]', 'Courses:') !!}
                {!! Form::select('courses[]', $courses, $cyberpunk->courses->lists('id'),
                ['multiple' => 'multiple', 'class' => 'form-control']) !!}
                {!! $errors->first('courses', '<label>:message</label>') !!}
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

@section('scripts')
    <script src="{!! asset('packages/bower/select2/dist/js/select2.min.js') !!}" type="text/javascript"></script>
@endsection
@section('inline-scripts')
    <script type="text/javascript">
        $('select').select2({
            placeholder: "Select course(s)"
        });
    </script>
@endsection
