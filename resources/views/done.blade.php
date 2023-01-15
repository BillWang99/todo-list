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
       
        <div class="input-group">
            <form action="" method="POST">
                @csrf
                <input type="text" name="job" placeholder="接下來...">
                <button type="submit">新增</button>
            </form>
        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">狀態</th>
                    <td scope="col">待辦清單</td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <th scope="row">
                        
                    </th>
                    <td>{{$job->job}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>{{--container--}}
</body>
</html>