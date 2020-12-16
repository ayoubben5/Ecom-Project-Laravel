<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap Css Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm Project</title>
</head>
<body>
    
</body>
<!-- Bootstrap JS Cdn-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Jquery Cdn-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

{{View::make('header')}}
@yield('content')
{{View::make('footer')}}

<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
        margin-left: 500px;
    }
    .slider-img{
        height: 500px !important
    }
    .custom-product{
        height: 600px;
        }
    .carousel-caption{
        background-color: #35443585 !important
    } 
    .trending-item{
        float: left;
        width: 20%;
        
    }
    .trending-wrapper{
        margin: 30px;
    }
    .trending-img{
        height: 100px;
    }
    .detail-img{
        height: 200px;
    }
</style>
</html>