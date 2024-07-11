<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO DO app demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">TODO App </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">All tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tasks/create">new task</a>
              </li>

              @role('admin')
              <li class="nav-item">
                <a class="nav-link" href="/admin">admin dashboard</a>
                </li>
                  @endrole
              
              

              
              <li><a class="nav-link" href="logout">logout</a></li>
            
            </ul>
          </div>
        </div>
      </nav>




    <div class="container">
@yield('content')

</div>
</body>
</html>