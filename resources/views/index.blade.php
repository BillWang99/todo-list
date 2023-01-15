<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style src="{{asset('js/bootstrap.min.js')}}"></style>
    <link rel="icon" href="{{asset('img/checklist.ico')}}" type="image/x-icon" />
    <title>待辦事項</title>
</head>
<body>
    <div class="container" >
        <h1>待辦事項</h1>
        {{--建立新事項輸入欄位--}}
        <div class="input-group">
            <form action="" method="POST">
                @csrf
                <input type="text" name="job" placeholder="接下來...">
                <button type="submit">新增</button>
            </form>
        </div>
        
        {{--建立清單--}}
        <table class="table">
            <thead>
                <tr>
                    <th width="20%">狀態</th>
                    <td  width="50%">任務</td>
                    <td  width="30%">刪除</td>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <th width="20%">
                        <form action="edit/{{$job->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-check">
                                <input class="form-check-input" onclick="submit()" type="checkbox">
                                
                            </div>
                        </form>
                    </th>
                    <td width="50%">{{$job->job}}</td>
                    <td width="30%">
                        <form action="/delete/{{$job->id}}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger">刪除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>{{--container--}}
    
</body>
</html>