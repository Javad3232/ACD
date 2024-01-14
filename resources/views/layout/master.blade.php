<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <nav class="nav nav-tabs justify-content-end">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">حساب ها</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">حساب مشتری ها</a></li>
            <li><a class="dropdown-item" href="#">حساب صرافی ها</a></li>
            <li><a class="dropdown-item" href="#">حساب شرکت ها</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">حساب های متفرقه</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="#">فاکتور خرید</a>
        </li> 
        <li class="nav-item">
                <a class="nav-link" href="#">فاکتور فروش</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/test">روزنامچه</a>
        </li>
    
        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">اطلاعات عمومی</button>
    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">اطلاعات عمومی شرکت</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
        </div>
    </nav>



@yield('content')
</body>
</html>