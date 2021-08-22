<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 8 CRUD Example</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  <style>
    .container{
        margin-top: 36px;
    }
    table tr td:last-child{
        width: 33%;
    }
</style>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
</head>
<body>
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        @yield('content')  
      </div>
    </div>
  </div>      
</body>
</html>