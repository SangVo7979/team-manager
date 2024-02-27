<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Team</title>
</head>
<body>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>{{ __('Mã Team') }}</th>
                    <th>{{ __('Tên Team') }}</th>
                    <th>{{ __('Tên bộ phận') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $row)
                <tr onclick="hello('{{$row->team_id}}','{{$row->team_name}}','{{$row->department_name}}')" id="{{$row->team_id}}">
                    <td>{{$row->team_id}}</td>
                    <td>{{$row->team_name}}</td>
                    <td>{{$row->department_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <script>
            function hello(id,name,la){
                document.getElementById("team_id").value = id;
                document.getElementById("team_name").value = name;
                document.getElementById("department_name").value = la;
            }
        </script>
    </div>
    <div>
        <form>
            <label for="team_id">Mã Team</label>
            <input type="text" id="team_id" name="team_id" disabled><br>
            <label for="team_name">Tên Team</label>
            <input type="text" id="team_name" name="team_name" disabled><br>
            <label for="department_name">Bộ Phận</label>
            <select name="department_name" id="department_name" disabled>
                @foreach($department as $row)
                <option value="{{$row->department_name}}">{{$row->department_name}}</option>
                @endforeach
            </select></br>
            <input type="submit" value="Thêm">
            <input type="submit" value="Sủa">
            <input type="submit" value="Xóa">
          </form> 
    </div>
</body>
</html>