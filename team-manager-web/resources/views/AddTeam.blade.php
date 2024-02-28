<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Team</title>
</head>
<body>
    <h1>Thêm team</h1>
    <form method="POST" action="{{ route('AddDB') }}">
        @csrf
        <label for="team_id">Mã Team</label>
        <input type="text" id="team_id" name="team_id"><br>
        <label for="team_name">Tên Team</label>
        <input type="text" id="team_name" name="team_name"><br>
        <label for="department_id">Bộ Phận</label>
        <select name="department_id" id="department_id">
            @foreach($department as $row)
            <option value="{{$row->department_id}}">{{$row->department_id}}</option>
            @endforeach
        </select></br>
        <button type="submit">Xác Nhận</button>
        <a href="{{ route('listOfTeam')}}">Hủy</a>
    </form>
</body>
</html>