<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/x3dom.css">

    <title>My Coca Cola Brand</title>
    </head>
    <body id="theme">
        <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
            <!--Brand-->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h3>My&nbsp;</h3>
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Brand<sup>TM</sup></h3>
                    <p class="para">A custom made Coca Cola Model</p>
                </a>
            </div>
                
            <!--Collapsible Navbar Menu Icon-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Link Menu item button to the links class navbar-collapse selector-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav ml-auto"><!--Use mx-auto to align center, default to left or use mr-auto, these are used to pull right -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="My 3D App" data-content="This is my 3D project">About</a>
                    </li>
                    <!--Dropdown-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:swap('coketab')">Coca Cola</a>
                            <a class="dropdown-item" href="javascript:swap('fantatab')">Fanta</a>
                            <a class="dropdown-item" href="javascript:swap('spritetab')">Sprite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" 
                        title="My Contact" data-content="Contact me on +971 50 401 1543">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Main Body-->
        <div class="container main_contents">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="javascript:swap('coketab')" class="nav-link active">Coca Cola</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:swap('fantatab')" class="nav-link">Fanta</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:swap('spritetab')" class="nav-link">Sprite</a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="row"><!--Main_3D Image or Carousel-->
                <div class="col-xs-12">
                    <div id="main_3d_image">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <h2>Coca Cola Great Britain</h2>
                            <h3>Founded by Dr John S Pemberton</h3>
                            <p>The Coca Cola company is the world's leading manufacturer, marketer and distributor of 
                                non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div id="coketab">
                        <h4>This is my Coca Cola 3D App</h4>
                        <div class="row">
                            <!--Coca Cola Column-->
                            <div class="col-sm-12">
                                <div class="card">
                                    <a href="#">
                                        <?php
                                            $all_files = glob("../assets/images/*.*");
                                            for ($i=0; $i<count($all_files); $i++)
                                            {
                                                $image_name = $all_files[$i];
                                                if(filesize($image_name)<100000){
                                                    $supported_format = array('gif','jpg','jpeg','png');
                                                    $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                    if (in_array($ext, $supported_format))
                                                    {
                                                        if($image_name="../assets/images/coca_cola.jpg"){
                                                            echo "<img class='card-img-top img-fluid img-thumbnail' src='".$image_name."' alt='Coca Cola' />";
                                                        }
                                                        break;                                                           
                                                    } 
                                                }
                                            }
                                        ?>
                                    </a>
                                    <div class="card-body">
                                        <h3 class="card-tile">Coca Cola</h3>
                                        <p class="card-text">
                                            It was 1886, John Pemberton, an atlanta pharmacist, was inspired by simple curiosity.
                                            One afternoon, he stirred up a fragrant, caramet-coloured liquid and, when it as done,
                                            the mixture was combined with carbonated water and sampled by customers who all agreed - 
                                            this new drink was something special!
                                        </p>
                                        <a href="javascript:swap3d('coke3d')" class="btn btn-primary">Show 3D Model</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fantatab" style="display: none;">
                        <h4>This is my Fanta 3D App</h4>
                        <div class="row">
                        <!--Fanta Column-->
                            <div class="col-sm-12">
                                <div class="card">
                                    <a href="#">
                                    <?php 
                                        for ($i=0; $i<count($all_files); $i++)
                                        {
                                            $image_name = $all_files[$i];
                                            if(filesize($image_name)<100000){
                                                $supported_format = array('gif','jpg','jpeg','png');
                                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                if (in_array($ext, $supported_format))
                                                {
                                                    if($image_name="../assets/images/fanta.jpg"){
                                                        echo "<img class='card-img-top img-fluid img-thumbnail' src='".$image_name."' alt='Fanta' />";
                                                    }
                                                    break;                                                          
                                                } 
                                            }
                                        }
                                    ?>
                                    </a>
                                    <div class="card-body">
                                        <h3 class="card-tile">Fanta</h3>
                                        <p class="card-text">
                                            Fanta originated in Germany as a Coca-Cola alternative in 1941 due to the American trade embargo of Nazi Germany, which affected the 
                                            availability of Coca-Cola ingredients. Fanta soon dominated the German market with three million cases sold in 1943.
                                        </p>
                                        <a href="javascript:swap3d('fanta3d')" class="btn btn-primary">Show 3D Model</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="spritetab" style="display: none;">
                        <h4>This is my Sprite 3D App</h4>
                        <!--Sprite Column-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <a href="#">
                                    <?php 
                                        for ($i=0; $i<count($all_files); $i++)
                                        {
                                            $image_name = $all_files[$i];
                                            if(filesize($image_name)<100000){
                                                $supported_format = array('gif','jpg','jpeg','png');
                                                $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                                                if (in_array($ext, $supported_format))
                                                {
                                                    if($image_name="../assets/images/sprite.jpg"){
                                                        echo "<img class='card-img-top img-fluid img-thumbnail' src='".$image_name."' alt='Sprite' />";
                                                    }
                                                    break;                                                           
                                                }
                                            }
                                        }
                                    ?>
                                    </a>
                                    <div class="card-body">
                                        <h3 class="card-tile">Sprite</h3>
                                        <p class="card-text">
                                            First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon 
                                            and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of 
                                            our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.
                                        </p>
                                        <a href="javascript:swap3d('sprite3d')" class="btn btn-primary">Show 3D Model</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!--3D Models-->
                    <h4 class="center textbox" id="model_text"> Coke Can 3D Model Displays Here</h4>
                    <div id="coke3d" style="display: block;">
                        <div class="row">
                            <p class="textbox">
                                I created this Coca Cola model in 3ds Max and converted it in to X3D using Instant Reality AOPT tool then rendered the same in HTML using X3DOM css and JavaScript libraries.
                            </p>
                            <div class="can-style coke">
                                <x3d width="500px" height="400px"> 
                                    <scene>
                                        <inline url="../coke/export/coke_animation.x3d"></inline> 
                                    </scene> 
                                </x3d>
                            </div>
                        </div>
                    </div>
                    <div id="fanta3d" style="display: none;">
                        <div class="row">
                            <p class="textbox">
                                I created this Fanta model in 3ds Max and converted it in to X3D using Instant Reality AOPT tool then rendered the same in HTML using X3DOM css and JavaScript libraries.
                            </p>
                            <div class="can-style fanta">
                                <x3d width="500px" height="400px"> 
                                    <scene>
                                        <inline url="../fanta/export/fanta_animation.x3d"></inline> 
                                    </scene> 
                                </x3d>
                            </div>
                        </div>
                    </div>
                    <div id="sprite3d" style="display: none;">
                        <div class="row">
                            <p class="textbox">
                                I created this Sprite model in 3ds Max and converted it in to X3D using Instant Reality AOPT tool then rendered the same in HTML using X3DOM css and JavaScript libraries.
                            </p>
                            <div class="can-style sprite">
                                <x3d width="500px" height="400px">
                                    <scene>
                                        <inline url="../sprite/export/sprite_animation.x3d"></inline> 
                                    </scene> 
                                </x3d>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--My 3D App footer-->
        <nav class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <p><span class="align-baseline"></span>Copyright &copy; <?php echo date('Y')?> My 3D App Assignment</span></p>
                </div>
                <div class="navbar-text float-right social">
                    <a href="#"><i class="fab fa-facebook-square fa-2x fa-color"></i></a>
                    <a href="#"><i class="fab fa-twitter-square fa-2x fa-color"></i></a>
                    <a href="#"><i class="fab fa-google-plus-square fa-2x fa-color"></i></a>  
                    <a href="#"><i class="fab fa-github-square fa-2x fa-color"></i></a>         
                </div>
            </div>
        </nav>

        <script src="../js/jquery-3.5.1.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/fontawesome.js"></script>
        <script src="../js/x3dom.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>