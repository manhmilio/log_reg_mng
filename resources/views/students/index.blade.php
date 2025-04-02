@extends('students.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('students.create') }}" class="btn btn-primary float-end">Thêm sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div class="alert alert-success">{{ Session::get('thongbao') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Phân quyền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                        @foreach($students as $sv)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $sv->MaSV }}</td>
                                <td>{{ $sv->TenSV }}</td>
                                <td>{{ $sv->NgaySinh }}</td>
                                <td>{{ $sv->GioiTinh }}</td>
                                <td>{{ $sv->DiaChi }}</td>
                                <td>{{ $sv->SDT }}</td>
                                <td>{{ $sv->Role }}</td>
                                <td>
                                    <a href="{{ route('students.edit', $sv->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                    <form action="{{ route('students.destroy', $sv->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection