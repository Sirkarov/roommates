@extends('admin.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Advertisements</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Огласувач</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Тип на Оглас</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Град</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Координати</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Улица</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Опис</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Цимери</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Греење</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Квадратура</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Цена</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($advertisements as $advert)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$advert->id}}</td>
                                    <td>{{$advert->user_id}}</td>
                                    <td>{{$advert->adv_type_id}}</td>
                                    <td>{{$advert->city}}</td>
                                    <td>{{$advert->coordinates}}</td>
                                    <td>{{$advert->street}}</td>
                                    <td>{{$advert->description}}</td>
                                    <td>{{$advert->roommates}}</td>
                                    <td>{{$advert->heating}}</td>
                                    <td>{{$advert->size}}</td>
                                    <td>{{$advert->price}}</td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-warning btn-sm">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
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