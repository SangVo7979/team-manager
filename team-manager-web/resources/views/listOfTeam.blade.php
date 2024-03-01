<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Team</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.pack.js"></script>
    {{-- <link href="{{asset('public/css/style.css') }}" rel='stylesheet' type='text/css' /> --}}
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />
  
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</head>
<body>
    <div>
        <h1>DANH SÁCH TEAM</h1>
        <table id="myTable">
            <thead>
                <tr>
                    <th>{{ __('Mã Team') }}</th>
                    <th>{{ __('Tên Team') }}</th>
                    <th>{{ __('Tên bộ phận') }}</th>
                    <th>{{__('Note')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $row)
                <tr id="{{$row->team_id}}">
                    {{-- <tr onclick="hello('{{$row->team_id}}','{{$row->team_name}}','{{$row->department_name}}')" id="{{$row->team_id}}"> --}}
                    <td>{{$row->team_id}}</td>
                    <td>{{$row->team_name}}</td>
                    <td>{{$row->department_name}}</td>
                    <td>
                        <a href="{{ route('EditTeam',$row->team_id)}}"><button class="btn btn-edit">Sửa</button></a>
                        <a onclick="return confirm('Bạn có muốn thực hiện hành động này không?')" href="{{ route('DeleteTeam',$row->team_id)}}"><button class="btn btn-del">Xóa</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <p id="demo"></p>
        </table>
        {{-- <script>
            function hello(id,name,la){
                document.getElementById("team_id").value = id;
                document.getElementById("team_name").value = name;
                document.getElementById("department_name").value = la;
            }
        </script> --}}
    </div>
    <div>
        {{-- <form>
            <label for="team_id">Mã Team</label>
            <input type="text" id="team_id" name="team_id" disabled><br>
            <label for="team_name">Tên Team</label>
            <input type="text" id="team_name" name="team_name" disabled><br>
            <label for="department_name">Bộ Phận</label>
            <select name="department_name" id="department_name" disabled>
                @foreach($department as $row)
                <option value="{{$row->department_name}}">{{$row->department_name}}</option>
                @endforeach
            </select></br> --}}
            <a href="{{ route('AddTeam')}}"><button  class="btn btn-add">Thêm</button></a>
            <a href="{{ route('export')}}"><button  class="btn btn-export">Xuất exel</button></a>
            {{-- <a href="{{ route('EditTeam')}}">Sửa</a>
            <a href="{{ route('DeleteTeam')}}">Xóa</a> --}}
          {{-- </form>  --}}
    </div>
</body>
</html>