<div class="box-tools pull-right">
    <div class="btn-group">
        <button aria-expanded="false" class="btn  btn-sm dropdown-toggle"
                data-toggle="dropdown"><i class="fa fa-bars"></i></button>
        <ul class="dropdown-menu pull-right" role="menu">

            <li> {!! link_to_route( 'courses.create', 'Register Course', [], []) !!}</li>

            @if( ! empty($course->id))
                <li class="divider"></li>
                <li>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['courses.destroy', $course->id] ]) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-block btn-warning btn-flat']) !!}

                    {!! Form::close() !!}
                </li>
            @endif
        </ul>
    </div>
    <button class="btn btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
    </button>
    <button class="btn btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
