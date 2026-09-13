@extends('master.master')
@section('content')
    <section>
        <h2>Danh sách cầu thủ</h2>
        <table border="1">
             <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Quốc tịch</th>
                <th>Vị trí</th>
                <th>Lương</th>
                <th>Thao tác</th>
            </tr>
            @foreach ($query as $value )
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->age }}</td>
                    <td>{{ $value->national }}</td>
                    <td>{{ $value->position }}</td>
                    <td>{{ $value->salary }}</td>
                    <td>
                        <a href="/edit_cauthu/{{ $value->id }}">Sửa</a>
                        <a href="/delete_cauthu/{{ $value->id }}">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection