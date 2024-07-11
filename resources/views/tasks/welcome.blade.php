@extends('layouts.app')
@section('content')
    <h1>hello task app</h1>
    @foreach ($tasks as $task)


    <div class="card  @if($task->isCompleted()) border-success @endif " style="margin-bottom: 20px">
        <div class="card-body">
            <p>
            {{$task->description}}

        </p>   
       
        @if ($task->isCompleted())
        <form method="post" action="/tasks/{{ $task->id }}">
            @csrf
            @method('delete')
      
            <button input="submit" class="btn btn-danger ">Remove task {{ $task->id }}</button>
           
        </form>
        
        @else
        <form method="post" action="/tasks/{{ $task->id }}">
            @csrf
            @method('patch')
      
            <button input="submit" class="btn btn-success ">Complete {{ $task->id }}</button>
           
        </form>
        
        @endif
        </div>
      </div>
@endforeach
<a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Add Task</a>
@endsection    


 
</body>
</html>