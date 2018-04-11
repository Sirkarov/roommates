@section('title', 'Додади сервиси')
@extends('admin.master')
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->

        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Додади категорија</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        <p>{{ Session::get('error') }}</p>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('success') }}</p>
                    </div>
            @endif
            <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                                        class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                                        class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                                        class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                                        class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Панел</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ GenerateLocalized::uri("admin/categories/store") }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Категорија/Подкатегорија</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="parent_id">
                                        <option value="" selected>Главна категорија</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->slug}}</option>
                                            @foreach($category->Children as $categoryChild)
                                                <option value="{{$categoryChild['id']}}"> --{{$categoryChild['slug']}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-3 control-label">Име</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="slug" class="col-md-3 control-label">Slug/Линк</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="slug" id="slug" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Слика</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-9">
                                    <button type="submit" name="submit" class="btn btn-sm btn-success">Додади</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->

        </div>
        <!-- end row -->

    </div>
@endsection