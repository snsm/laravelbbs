<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laravel App</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <style rel="stylesheet">
        .navbar{
            margin-bottom: 0;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">laravel App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="./">登 录</a></li>
                <li><a href="/user/register">注 册</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
@yield('content')
</body>
</html>