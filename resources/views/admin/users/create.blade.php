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
                    <input type="text" required  class="form-control" id="exampleInputName1" placeholder="Внеси Име" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Презиме</label>
                    <input type="text" required class="form-control" id="exampleInputSurname1" placeholder="Внеси Презиме" name="surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputSurname1">Пол</label>
                    <select class="form-control" id="exampleGender1" required name="gender">
                        <option hidden value="">Одбери Пол</option>
                        @foreach($genderTypes as $genderType)
                            <option value="{{$genderType->id}}">{{$genderType->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Адреса</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="Внеси Email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Години</label>
                    <input type="text" required class="form-control" id="exampleInputYears1" placeholder="Внеси Години" name="years">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Град</label>
                    <input type="text" required class="form-control" id="exampleInputCity1" placeholder="Внеси Години" name="city">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Телефон</label>
                    <input type="text" required class="form-control" id="exampleInputPhone1" placeholder="Внеси Телефон" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Опис</label>
                    <input type="text" required class="form-control" id="exampleInputDescription1" placeholder="Додади Опис" name="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Facebook</label>
                    <input type="text" required class="form-control" id="exampleInputFacebook1" placeholder="Facebook" name="facebook">
                </div>
                <div class="form-group">
                    <label for="exampleInputYears1">Twitter</label>
                    <input type="text" required class="form-control" id="exampleInputTwitter1" placeholder="Twitter" name="twitter">
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
