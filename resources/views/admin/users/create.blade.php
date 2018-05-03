@section('title')
@extends('admin.master')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Додадете нов Корисник</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.users.store')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputName1">Име</label>
                    <input type="text" required  class="form-control" placeholder="Внеси Име" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Презиме</label>
                    <input type="text" required class="form-control" placeholder="Внеси Презиме" name="surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Улога</label>
                    <select class="form-control" required name="role_id">
                        <option hidden value="">Одбери Улога</option>
                        @foreach($roleTypes as $roleType)
                            <option value="{{$roleType->id}}">{{$roleType->role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Пол</label>
                    <select class="form-control" required name="gender_type_id">
                        <option hidden value="">Одбери Пол</option>
                        @foreach($genderTypes as $genderType)
                            <option value="{{$genderType->id}}">{{$genderType->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Адреса</label>
                    <input type="email" required class="form-control" placeholder="Внеси Email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Години</label>
                    <input type="text" required class="form-control" placeholder="Внеси Години" name="years">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <select class="form-control" required name="city_id">
                        <option hidden value="">Одбери Град</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Телефон</label>
                    <input type="text" required class="form-control" placeholder="Внеси Телефон" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Опис</label>
                    <input type="text" required class="form-control" placeholder="Додади Опис" name="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Facebook</label>
                    <input type="text" required class="form-control" placeholder="Facebook" name="facebook">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Twitter</label>
                    <input type="text" required class="form-control" placeholder="Twitter" name="twitter">
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
