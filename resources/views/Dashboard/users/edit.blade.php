@extends('.Dashboard.layout.app')

@section('content')

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Form</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('users.update' , ['id' => $user->id]) }}" method="post">
            {{ method_field('put') }}
            @include('Dashboard.users.form')
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
            </div><!-- /.box-footer -->
        </form>
    </div>

@endsection
