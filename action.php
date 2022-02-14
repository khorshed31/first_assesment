<?php

require_once 'vendor/autoload.php';
use App\classes\Login;
use App\classes\Info;
use App\classes\Product;
use App\classes\Register;
use App\classes\ImageUpload;

session_start();
if (isset($_GET['pages'])){

    if ($_GET['pages'] == 'home'){

        if (isset($_SESSION['id'])){
            $product = new Product();
            $products = $product->getAllProduct();
            include 'pages/home.php';
        }
        else{
            $login = new Login();
            $login->index();
        }
    }

    elseif ($_GET['pages'] == 'user'){

        if (isset($_SESSION['id'])){
            $user = new Register();
            $users = $user->getAllUser();
            include 'pages/user.php';
        }
        else{
            $login = new Login();
            $login->index();
        }
    }
    elseif ($_GET['pages'] == 'upload'){

        if (isset($_SESSION['id'])){

            include 'pages/upload_img.php';
        }
        else{
            $login = new Login();
            $login->index();
        }
    }
    elseif ($_GET['pages'] == 'login'){

        if (isset($_SESSION['id'])){

            $home = new Info();
            $home->index();
        }
        else{
            include 'pages/login.php';
        }

    }
    elseif ($_GET['pages'] == 'register'){

        include 'pages/register.php';
    }
    if ($_GET['pages'] == 'logout'){

        $logout = new Login();
        $logout->logout();
    }
    elseif ($_GET['pages'] == 'product'){

        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'detail'){

        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/details.php';
    }
}

elseif (isset($_POST['login_btn'])){

    $login = new Login($_POST);
    $message = $login->verify();
    include 'pages/login.php';
}
elseif (isset($_POST['search_btn'])){

    $search = new Product($_POST);
    $result = $search->searchProduct();
    include 'pages/search_product.php';
}

elseif (isset($_POST['img_btn'])){

    $upload = new ImageUpload($_FILES);
    $message = $upload->uploadImage();
    include 'pages/upload_img.php';
}
