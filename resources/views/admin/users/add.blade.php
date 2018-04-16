@section('title')
@extends('admin.master')
@section('content')
<div class="container">
<section class="content">
<form role="form" method="POST" action={{route('admin.users.store')}}>
<div class="box-body">
<h1>Додади Корисник</h1>
<div class="form-group">
    <label for="exampleInputName1">Име</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Внеси Име" name="name">
</div>
<div class="form-group">
    <label for="exampleInputSurname1">Презиме</label>
    <input type="text" class="form-control" id="exampleInputSurname1" placeholder="Внеси Презиме" name="surname">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email Адреса</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Внеси Email" name="email">
</div>
<div class="form-group">
    <label for="exampleInputYears1">Години</label>
    <input type="text" class="form-control" id="exampleInputYears1" placeholder="Внеси Години" name="years">
</div>
<div class="form-group">
    <label for="exampleInputYears1">Град</label>
    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Внеси Години" name="city">
</div>
<div class="form-group">
    <label for="exampleInputYears1">Телефон</label>
    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Внеси Телефон" name="phone">
</div>
<div class="form-group">
    <label for="exampleInputYears1">Опис</label>
    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Додади Опис" name="description">
</div>
</div>
<!-- /.box-body -->
<div class="box-footer">
<button type="submit" class="btn btn-primary">Додади</button>
</div>
</form>
</section>
</div>
@endsection