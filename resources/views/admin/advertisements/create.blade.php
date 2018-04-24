@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нов Оглас</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.advertisements.store')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Огласувач</label>
                    <select class="form-control">
                        @foreach($users as $user)
                            <option >{{$user->name}} {{$user->surname}}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.users.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" required class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
