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
                    <select class="form-control" id="example1" required name="user-name">
                        <option hidden value="">Одбери Огласувач</option>
                        @foreach($users as $user)
                            <option>{{$user->name}} {{$user->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Тип на Оглас</label>
                    <select class="form-control" id="example1" required name="user-name">
                        <option hidden value="">Одбери Тип на Оглас</option>
                        @foreach($advertisement_types as $adv_type)
                            <option>{{$adv_type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Град</label>
                    <select class="form-control" id="example1" required name="city">
                        <option hidden value="">Одбери Град</option>
                        @foreach($cities as $city)
                            <option>{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Улица</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="Внеси Улица" name="street">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Опис</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="Внеси Улица" name="description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Број на Цимери</label>
                    <select class="form-control" id="example1" required name="roommates">
                        <option hidden value="">Одбери Број на цимери</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Опис</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="Внеси Улица" name="description">
                </div>
            </div>
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.advertisements.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" required class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
