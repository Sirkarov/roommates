@extends('admin.master')
@section('content')
<div class="box">
<div class="box-header">
    <h3 class="box-title">Users Table</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <div class="col-sm-1"><a class="btn btn-success" href={{asset('/admin/users/create')}}>Add New User</a></div>

    <form role="form" method="POST" action="{{route('admin.users.testStore')}}">

   <button type="submit" required class="btn btn-warning" style="display:inline"> Add Test User</button>
    </form>

    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 297px;">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 361px;">Име</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 323px;">Презиме</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 257px;">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Тип Корисник</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Пол</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Години</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Град</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Телефон</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Опис</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Facebook</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;">Twitter</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 191px;"></th>
                    </tr>
                    </thead>
                    <tbody id="Click">
                    @foreach($users as $user)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{$user->id}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roleType->role }}</td>
                        <td>{{ $user->genderType->type }}</td>
                        <td>{{ $user->years }}</td>
                        <td>{{ $user->city->name}}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->description }}</td>
                        <td>{{ $user->facebook }}</td>
                        <td>{{ $user->twitter }}</td>
                        <td>
                            <a class="btn btn-block btn-warning btn-sm"  href="{{route('admin.users.edit', $user->id )}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-block btn-danger delete-button btn-sm" data-id="{{$user->id}}" data-token="{{csrf_token()}}" data-url="{{route('admin.users.delete')}}">Delete
                            </a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">ID</th>
                        <th rowspan="1" colspan="1">Име</th>
                        <th rowspan="1" colspan="1">Презиме</th>
                        <th rowspan="1" colspan="1">Email</th>
                        <th rowspan="1" colspan="1">Тип Корисник</th>
                        <th rowspan="1" colspan="1">Пол</th>
                        <th rowspan="1" colspan="1">Години</th>
                        <th rowspan="1" colspan="1">Град</th>
                        <th rowspan="1" colspan="1">Телефон</th>
                        <th rowspan="1" colspan="1">Опис</th>
                        <th rowspan="1" colspan="1">Facebook</th>
                        <th rowspan="1" colspan="1">Twitter</th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                        <th rowspan="1" colspan="1"></th>
                    </tr>
                    </tfoot>
                </table></div></div>
    </div>
</div>
<!-- /.box-body -->
</div>
@endsection
@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $("#example1").on("click", ".delete-button", function(){
                var token = $(this).data('token');
                var url = $(this).data('url');
                var id= $(this).data("id");
                var that = $(this);
                swal({
                    title: "Дали сте сигурни?",
                    text: "Нема да можете да вратите избришани податоци",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                method: "DELETE",
                                url: url,
                                data : {_token:token, id: id},
                                success: function(response){
                                    swal("Успешно е избришано.", {
                                        icon: "success",
                                    });
                                    if(response.status=='success') {
                                        that.closest('tr').fadeOut(500);
                                    }
                                }
                            });
                        }

                    });
            });
        });
    </script>
    @endsection

