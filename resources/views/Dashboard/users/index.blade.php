@extends('.Dashboard.layout.app')

@section('content')

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title" style="margin-top: 20px">Users Table</h3>
                <a class="btn btn-app" href="{{ route('users.create') }}" style="float: left;height: 50px;border-radius: 20px">
                    <i class="fa fa-plus" ></i>
                </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody class="text-center">
                    <tr>
                        <th class="text-center" style="width: 10px">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Control</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit' , ['id' => $user->id]) }}">
                                <i class="fa fa-edit" style="font-size: 27px;color: black;margin-left: 5px"></i>
                            </a>
                            <form action="{{ route('users.destroy' , ['id' => $user->id])}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li> {!! $users->links() !!} </li>
{{--                    <li><a href="#">1</a></li>--}}
{{--                    <li><a href="#">2</a></li>--}}
{{--                    <li><a href="#">3</a></li>--}}
{{--                    <li><a href="#">»</a></li>--}}
                </ul>
            </div>
        </div><!-- /.box -->
    </div>

@endsection
