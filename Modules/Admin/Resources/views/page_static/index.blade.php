@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Page tĩnh</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
                        <h2>Quản lý bài viết <a href="{{ route('admin.get.create.page_static') }}" class='pull-right'><i class="fas fa-plus-circle" style="font-size: 25px"></i></a></h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th width="20%">Tiêu đề trang</th>
                                    <th>Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($pages))
                                    @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page ->id }}</td>
                                        <td>
                                            {{ $page ->ps_name }}
                                        </td>
                                        <td>
                                            {{ $page->created_at }}
                                        </td>
                                        <td>
                                            <a style="border: 1px solid #999;padding: 5px 6px;border-radius: 5px;font-weight: bold;font-size: 12px;" href="{{ route('admin.get.edit.page_static',$page->id) }}"><i class="fas fa-pen" style="font-size: 11px"></i> Cập nhật</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

@stop
