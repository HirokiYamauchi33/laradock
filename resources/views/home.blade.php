@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">
            タスクを確認しましょう
          </div>
          <div class="panel-body">
            <div class="text-center">
              <a href="{{ route('tasks.index',['1']) }}" class="btn btn-primary">
                タスク一覧へ
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection