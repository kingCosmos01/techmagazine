<?php require_once '../../app/bootstrap.php'; ?>

<?php 

    $adminCore = new AdminCore;

    
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['admin-user']);
        header('location: http://localhost/magazine/public/mag-admin/user/');
    }

    if(!isset($_SESSION['admin-user']))
    {
        header('location: http://localhost/magazine/public/mag-admin/user/');
    }
 
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/overview.css">
    <link rel="stylesheet" href="./css/add_article.css">
    <link rel="stylesheet" href="./css/add_category.css">
    <link rel="stylesheet" href="./css/all_articles.css">
    
    <title><?php echo SITENAME; ?> - Dashboard</title>
</head>
<body>
    
