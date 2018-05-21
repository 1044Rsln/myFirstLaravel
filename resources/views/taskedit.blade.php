 <!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

  <!-- Bootstrap шаблон... -->

  <div class="panel-body">
    <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    @if(!empty($task))
    <!-- Форма новой задачи -->
    <form action="{{ url('task/edit') }}" method="POST" class="form-horizontal" >
      {{ csrf_field() }}
      
      <input type="hidden" name="id" value="{{$task->id}}">
      
      <!-- Имя задачи -->
      <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Редактировать</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="task-name" class="form-control" value="{{$task->name}}">
        </div>
      </div>

      <!-- Кнопка добавления задачи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-save"></i> Save
          </button>
        </div>
      </div>
    </form>
    @else
    <p>no task for edit<a href="{{ url('/') }}">to all tasks</a></p>
    @endif
  </div>
        
      @endsection