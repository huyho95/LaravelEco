@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Danh mục</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
                        <h2>Quản lý danh mục <a href="{{ route('admin.get.create.category') }}" class='pull-right'><i class="fas fa-plus-circle" style="font-size: 25px" ></i></a></h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Tên tiêu đề</th>
                                    <th>Trang chủ</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($categories))
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category ->id }}</td>
                                        <td>{{ $category ->c_name }}</td>
                                        <td>{{ $category ->c_title_seo }}</td>
                                        <td>
                                            <a href="{{ route('admin.get.action.category',['home',$category->id]) }}">{{ $category->getHome($category->c_home)['name'] }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.get.action.category',['active',$category->id]) }}">{{ $category->getStatus($category->c_active)['name'] }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.get.edit.category',$category->id) }}" style="border: 1px solid #999;padding: 5px 6px;border-radius: 5px;font-weight: bold;font-size: 12px;"><i class="fas fa-pen"></i> Cập nhật</a>
                                            <a href="{{ route('admin.get.action.category',['delete',$category->id]) }}" style="border: 1px solid #999;padding: 5px 6px;border-radius: 5px;font-weight: bold;font-size: 12px;"><i class="fas fa-trash-alt"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
@stop
