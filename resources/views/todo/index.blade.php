@extends('layouts.app')
@section('content')

<h2 class="page-header">ToDo一覧</h2>

<p class="pull-right">
  <a class="btn btn-success" href="/todo/create">追加</a>
</p>

<table class="table table-hover todo-table">
  <thead>
    <tr>
      <th>やること</th>
      <th>作成日時</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($todos as $todo)
        <tr>
          <td>{{{ $todo->title }}}</td>
          <td>{{{ $todo->created_at }}}</td>
          <td>{{{ $todo->updated_at }}}</td>
          <td><a class="btn btn-info" href="{{{ route('todo.edit', $todo->id) }}}">編集</a></td>
          <td>
            {!! Form::open(['route'=>['todo.destroy',$todo->id],'method'=>'DELETE']) !!}
                <button class="btn btn-danger" type="submit">削除</button>
            {!! Form::close() !!}
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
