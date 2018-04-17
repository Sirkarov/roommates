@extends('admin.master')
@section('content')
<div class="jose">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Characteristics</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-lg-6">
            <div class="col-sm-1"><a class="btn btn-success " href={{asset('/admin/characteristics/create')}}>Add New Characteristic</a></div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th>Карактеристика</th>
                <th>Измени</th>
                <th>Избриши</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            @foreach( $characteristics as $characteristic )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$characteristic->characteristic}}</td>

                <td>
                    <button type="button" class="btn btn-block btn-warning btn-sm">Edit</button>
                </td>
                <td>
                <form role="form" method="POST" action="{{route('admin.characteristics.destroy', $characteristic->id )}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-block btn-danger btn-sm">Delete</button>
                </form>
                </td>
            </tr>
                @endforeach
        </table>
        </div>
    </div>
</div>
</div>
<!-- /.box-body -->
</div>
</div>
@endsection