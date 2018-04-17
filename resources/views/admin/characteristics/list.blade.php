@extends('admin.master')
@section('content')
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Characteristics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <div class="col-sm-1"><a class="btn btn-success" href={{asset('/admin/characteristics/create')}}>Add New User</a></div>
                    <thead><tr>
                        <th style="width: 10px">ID</th>
                        <th>Карактеристика</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    @foreach( $characteristics as $characteristic )
                    <tr>
                        <td>{{$characteristic->id}}</td>
                        <td>{{$characteristic->characteristic}}</td>
                    </tr>
                        @endforeach
                </table>
            </div>
        </div>
        </div>
        <!-- /.box-body -->
    </div>
    @endsection