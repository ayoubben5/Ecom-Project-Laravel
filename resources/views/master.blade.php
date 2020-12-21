<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap Css Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('img/icon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/icon.png')}}" type="image/x-icon">
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
        height: 500px !important;
        width:100%;
        object-fit: cover;
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
    .search-box{
        width: 500px !important
    }
    #Footer{
    background-color: #2C2929;
}
Footer div p{
    margin-left: 120px;
    margin-bottom: 3px;
    color: #fff;
}
.fa-facebook{
    margin-left: 120px;
    margin-bottom: 3px;
    color: #fff;
}
.fa-twitter , .fa-instagram{
    margin-left: 10px;
    margin-bottom: 3px;
    color: #fff;
}

.fa-facebook:hover , .fa-twitter:hover , .fa-instagram:hover{
    color:  #74c044;
    transform: scale(2);
}
Footer div p:hover{
    margin-left: 120px;
    color:  #74c044;
    transform: scale(1.1);
}
.footer-item1{
    margin-top: 40px;
    color: white;
    font-size: 18px;
    font-weight: 700;
}

.footer-item1:hover{
    color:  #74c044;
    transform: scale(1.1);
}



.RF-footer{
    margin-left: 120px;
    margin-top:40px;
    font-style: italic;
    font-family: 'Sansita Swashed', cursive;
}

.divider{
    margin-left: 120px;
    margin-top: 20px;
    border-bottom: 5px solid transparent;
    
}
.divider span {
    display: block;
    width: 100px;
    height: 3px;
    background-color: #74c044;
}
.rf1-footer{
    margin-top: 30px;
    margin-left: 120px;
    margin-bottom: 20px;
    color: #838181;
}
.rf1-footer:hover{
    color: white;
    transform: scale(1);
}
</style>
</html>