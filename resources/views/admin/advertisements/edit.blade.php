@section('title')
    @extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Измени го Огласот {{$advertisement->id}}</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.advertisements.store')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Огласувач</label>
                    <select required class="form-control" name="user">
                        <option hidden value="" name="">Избери Корисник</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}} {{$user->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Тип на Оглас</label>
                    <select required  class="form-control" name="adv-type">
                        <option hidden value="">Избери тип на Оглас</option>
                        @foreach($advertisement_types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Град</label>
                    <select required  class="form-control" name="city">
                        <option hidden value="">Избери Град</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Координати</label>
                    <input class="form-control" type="text" required placeholder="Внесете Координати" name="coordinates">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Опис</label>
                    <textarea class="form-control" placeholder="Внесете Опис" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Улица</label>
                    <input class="form-control" type="text" required placeholder="Внесете Улица" name="street">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Цимери</label>
                    <select required class="form-control" name="roommates">
                        <option value="" hidden>Избери Број на Цимери</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Греење</label>
                    <select required class="form-control" name="heating">
                        <option hidden value="">Избери Греење</option>
                        @foreach($heating_types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Квадратура</label>
                    <input class="form-control" type="text" required placeholder="Внесете Големина" name="size">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Тип на Објект</label>
                    <select required class="form-control" name="apartment-type">
                        <option hidden value="">Избери Објект</option>
                        @foreach($apartment_types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input class="form-control" type="text" required placeholder="Внесете Цена" name="price">
                </div>
                <div class="form-group">
                    <label>Карактеристики на Објектот</label><br>
                    @foreach($characteristics as $characteristic)
                        <div class="checkbox" value="{{$characteristic->id}}" style="display: inline">
                            <label>
                                <input type="checkbox"> {{$characteristic->characteristic}}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer buttons">
                <a class="btn btn-block btn-info btn-sm fa fa-times" href="{{route('admin.advertisements.list')}}"  style="display:inline"> Откажи</a>
                <button type="submit" required class="btn btn-success fa fa-check" style="display:inline"> Додади</button>
            </div>
        </form>
        <!-- form end  -->
    </div>
@endsection
