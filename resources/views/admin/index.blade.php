@extends('layouts.app')

@section('content')
<body>

        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 40vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TODO</h3>
                            </a>
                            <h1> ADMIN</h1>
                        {{-- </div> --}}

                    
                    </div>
                </div>
            </div>
        </div>
    
    {{-- /////////////////////////////////////////////////////////////////////////////////// --}}

   <h1>All Users Tasks </h1>
    @foreach ($tasks as $task)


    <div class="card  @if($task->isCompleted()) border-success @endif " style="margin-bottom: 20px">
        <div class="card-body">
            <p>
            {{$task->description}}

        </p>   
       
   
        </div>
      </div>
@endforeach  
<div style="min-height: 10vh;"></div>
 


    {{-- /////////////////////////////////////////////////////////////////////////////////// --}}

   
</body>

</html>

@endsection   