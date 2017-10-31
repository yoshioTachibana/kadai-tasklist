@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="row">

        <div class="">
            @if (count($tasks) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>タスク</th>
                            <th>ステイタス</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task){
                            <tr>
                                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                                <td>{{ $task->content }}</td>
                                <td>{{ $task->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    
    {!! link_to_route('tasks.create','新規タスクの投稿',null, ['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそ、タスク管理アプリへ</h1>
                {!! link_to_route('signup.get', 'サインアップはこちら', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection