<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Team</title>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
</head>
<body>
    <h1>Sửa team</h1>
    <form method="POST" action="{{ route('UpdateDB',$id) }}">
        @csrf
        <label for="team_id">Mã Team</label>
        <input style="text-transform: uppercase;" type="text" id="team_id" name="team_id" value="{{$team[0]->team_id}}" required maxlength="20"><br>
        <label for="team_name">Tên Team</label>
        <input type="text" id="team_name" name="team_name"value="{{$team[0]->team_name}}" required maxlength="50"><br>
        <label for="department_id">Bộ Phận</label>
        <select name="department_id" id="department_id">
            @foreach($department as $row)
            <option value="{{$row->department_id}}"
                @if($row->department_id==$team[0]->department_id) selected="selected" @endif
                >{{$row->department_id}}</option>
            @endforeach
        </select></br>
        <button class="btn btn-confirm" type="submit">Cập Nhật</button>
        <a href="{{ route('listOfTeam')}}"><button class="btn btn-cancel">Hủy</button></a>
    </form>
</body>
</html>