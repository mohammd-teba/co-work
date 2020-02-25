@extends('Dashboard.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ \App\Models\User::count() }}</h3>
                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">Show more<i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
    @endsection
