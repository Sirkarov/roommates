@extends('admin.master')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Advertisements</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
            <div class="col-sm-1"><a class="btn btn-success" href={{asset('/admin/advertisements/create')}}>Додади нов Оглас</a></div>
        <form role="form" method="POST" action="{{route('admin.advertisements.testStore')}}">
            <button type="submit" class="btn btn-warning" style="margin-left:20px">ДОДАДИ ТЕСТ ОГЛАС</button>
        </form>
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Огласувач</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Име</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Тип на Оглас</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Град</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Координати</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Улица</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Опис</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Цимери</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Греење</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Квадратура</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Цена</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Active</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($advertisements as $advertisemet)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{$advertisemet->id}}</td>
                                <td>{{$advertisemet->user->name}} <br> {{$advertisemet->user->surname}}</td>
                                <td class="sorting_1">{{$advertisemet->name}}</td>
                                <td>{{$advertisemet->advertisementType->type}}</td>
                                <td>{{$advertisemet->city->name}}</td>
                                <td>{{$advertisemet->coordinates}}</td>
                                <td>{{$advertisemet->street}}</td>
                                <td>{{$advertisemet->description}}</td>
                                <td>{{$advertisemet->roommates}}</td>
                                <td>{{$advertisemet->heatingType->type}}</td>
                                <td>{{$advertisemet->size}}</td>
                                <td>{{$advertisemet->price}}</td>
                                <td>{{$advertisemet->active}}</td>
                                <td>
                                    <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.advertisements.edit', $advertisemet->id )}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$advertisemet->id}}" data-token="{{csrf_token()}}" data-url="{{route('admin.advertisements.delete')}}">Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach</tbody>
                        <tfoot>
                        <tr></tr>
                        </tfoot>
                    </table></div></div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
@endsection