<h1>Danh sách phòng</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên phòng</th>
        <th>Giá</th>
        <th>Sức chứa</th>
        <th>Trạng thái</th>
    </tr>
    @foreach ($rooms as $room )
    <tr>
        <td>{{ $rooms->id }}</td>
        <td>{{ $rooms->room_name }}</td>
        <td>{{ $rooms->price }}</td>
        <td>{{ $rooms->capacity }}</td>
        <td>{{ $rooms->available ? 'Còn trống' : 'Đã đặt' }}</td>
    </tr>    
    @endforeach
</table>