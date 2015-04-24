@extends('layouts.app')

@section('title', 'Cyberpunks List')

@section('styles')
    <!-- DATA TABLES -->
    <link href="{!! asset('packages/bower/admin-lte/plugins/datatables/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('packages/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') !!}" rel="stylesheet" type="text/css">
@endsection

@section('inline-styles') @endsection

@section('content-header')
    <h1>
        All Courses
        <small>{{ Inspiring::quote() }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="table-cyberpunks" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
@endsection

@section('scripts')
    <!-- DATA TABLES SCRIPT -->
    <script src="{!! asset('packages/bower/admin-lte/plugins/datatables/jquery.dataTables.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('packages/bower/admin-lte/plugins/datatables/dataTables.bootstrap.js') !!}" type="text/javascript"></script>

    <script src="{!! asset('packages/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') !!}" type="text/javascript"></script>
@endsection

@section('inline-scripts')
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $('#table-cyberpunks').dataTable();

            $('.tags').tagsinput({
                'data-role': ''
            });
        });
    </script>
@endsection
