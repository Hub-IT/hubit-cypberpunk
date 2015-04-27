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
        All Cyberpunks
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
            @include('cyberpunks._toolbox')
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="table-cyberpunks" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DEREE ID</th>
                    <th>Courses</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cyberpunks as $cyberpunk)
                    <tr>
                        <td>
                            <div class="btn-group">
                                {!! link_to_route('cyberpunks.edit', 'Edit', $cyberpunk, ['class' => 'btn btn-info
                                btn-flat', 'id' => 'id-edit-' . $cyberpunk->id]) !!}
                                <button type="button" class="btn btn-info btn-flat dropdown-toggle"
                                        data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['cyberpunks.destroy',
                                        $cyberpunk->id]]) !!}

                                        {!! Form::submit('Delete', ['class' => 'btn btn-block btn-warning
                                        btn-flat', 'id' => 'id-delete-' . $cyberpunk->id]) !!}

                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>{{ $cyberpunk->name }}</td>
                        <td>{{ $cyberpunk->email }}</td>
                        <td>{{ $cyberpunk->deree_student_id }}</td>
                        <td>
                            <input value="@foreach($cyberpunk->courses as $course){{ $course->name }},@endforeach"
                                   data-role="tagsinput" disabled class="tags">
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DEREE ID</th>
                    <th>Courses</th>
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
