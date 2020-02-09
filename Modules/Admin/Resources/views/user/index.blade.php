@extends('admin::layouts.master')
@section('content')
<div class="page-header">
    <ol class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="{{ route('admin.get.list.user') }}">Thành viên</a></li>
        <li class="active">Danh sách</li>
    </ol>
</div>
<div class="table-responsive">
    <h2>Quản lý thành viên</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($users))
            @foreach($users as $user)
            <tr>
                <td>{{ $user ->id }}</td>
                <td>{{ $user ->name }}</td>
                <td>{{ $user ->email }}</td>
                <td>{{ $user ->phone }}</td>
                <td>
                    <img src="{{ asset(pare_url_file($user->avatar)) }}" alt="" class='img img-responsive'
                        style="width: 80px;height: 80px">
                </td>
                <td>
                    <a style="border: 1px solid #999;padding: 5px 6px;border-radius: 5px;font-weight: bold;font-size: 12px;"
                        href="{{ route('admin.get.edit.user',$user->id) }}"><i class="fas fa-pen"
                            style="font-size: 11px"></i> Cập nhật</a>
                    <a style="border: 1px solid #999;padding: 5px 6px;border-radius: 5px;font-weight: bold;font-size: 12px;"
                        href="{{ route('admin.get.action.user',['delete',$user->id]) }}"><i class="fas fa-trash-alt"
                            style="font-size: 11px"></i> Xóa</a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
{!! $users->links() !!}
@stop