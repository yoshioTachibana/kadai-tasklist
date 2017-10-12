<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>taskList</title>
        
       <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        @include('common.error_tasks')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- 横幅が狭い時に出るハンバーガーボタン -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
      <a class="navbar-brand" href="/">ホーム</a>
    </div>

    <!-- メニュー項目 -->
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>{!! link_to_route('tasks.index','タスク一覧') !!}</li>
        <li>{!! link_to_route('tasks.create','新規タスク登録') !!}</li>
     </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        @yield('content')
    </body>
</html>