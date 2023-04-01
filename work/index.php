<?php

$current_url = $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($current_url);
$path = $parsed_url['path'];

// Костыль что бы работали Title и Description
if ($path == '/work' || $path == '/work/') {

    $title = 'Листинг работ';
    $description = 'Листинг работ';

} elseif (substr($path, 6) !== '') {
    $url = $_GET['url'];
    
    require_once('../config/db_config.php');
    
    $sql_article = "SELECT work_projects.seo_title, work_projects.seo_description, work_projects.in_active 
    FROM work_projects 
    WHERE work_projects.url = '" . $url . "'";
    //  and work_projects.in_active = '1'";
            
    $result_article = mysqli_query($conn, $sql_article);
    
    if (mysqli_num_rows($result_article) > 0) {
        
        $article = mysqli_fetch_assoc($result_article);
    
        $title = $article["seo_title"];
        $description = $article["seo_description"];
    
    }
}
// Конец костыля
?>

<!DOCTYPE html>
<html>

<head>
    <?php include_once('../parts/head.php');?>
</head>

<body>
    <?php include_once('../parts/header.php');?>
    <?php
    if ($path == '/work' || $path == '/work/') {
        
        // Выводим листинг работ
        include_once('work_listing.php');

    } else {

        // Выводим одну работу
        include_once('work_post.php');

    }
    ?>
    <?php include_once('../parts/footer.php');?>
</body>

</html>