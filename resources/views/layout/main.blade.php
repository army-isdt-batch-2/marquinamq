<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
</head>
<body>
    
  @include('component.header')
 
          <div>
            <div style="margin-top: -1%;" class="row">
              <div class="col-3 sidebar">
              @include('component.sidebar')
              </div>

              <div class="col-3"></div>
                <div class="col-9 content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <style> 
     ::-webkit-scrollbar{
            display: none;
        }
        .content{
            overflow-x: hidden;
            overflow-y: scroll;
        } 
      header{
          position:fixed;
          left:0; 
          top: 0;
          width: 100%;
          z-index: 100;
      }
      .sidebar{
          position:fixed;
          left:0; 
          top: 12.5%;
          height: 100%;
          padding-left: : 0 !important;
      }
      .content{
          margin-top: 7%;
          margin-left: 0%;
          padding-bottom: 5%;
      }
    </style>
    
    
    
    
    
    
    
    
    {{-- <style>  
      .nav-link,
      .nav-link:hover{
          color: #212629;
      }
      .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
          color: #fff;
          background-color: #212629;
      }
    </style> --}}

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>

