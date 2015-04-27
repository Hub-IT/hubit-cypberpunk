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
            @include('courses._toolbox')
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="table-cyberpunks" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>
                            <div class="btn-group">
                                {!! link_to_route('courses.edit', 'Edit', $course, ['class' => 'btn btn-info
                                btn-flat', 'id' => 'id-edit-' . $course->id]) !!}
                                <button type="button" class="btn btn-info btn-flat dropdown-toggle"
                                        data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['courses.destroy',
                                        $course->id]]) !!}

                                        {!! Form::submit('Delete', ['class' => 'btn btn-block btn-warning
                                        btn-flat', 'id' => 'id-delete-' . $course->id]) !!}

                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>{{ $course->name }}</td>
                    </tr>
                @endforeach
                <tfoot>
                <tr>
                    <th></th>
                    <th>Name</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{!! asset('packages/bower/admin-lte/plugins/datatables/jquery.dataTables.js') !!}"></script>
    <script src="{!! asset('packages/bower/admin-lte/plugins/datatables/dataTables.bootstrap.js') !!}"></script>

    <script type="text/javascript">
        $(function () {
            $("#animalsTable").dataTable();
        });
    </script>
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
