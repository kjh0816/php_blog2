<?php 


if(!isset($_GET['title'])){
    $_GET ['title'] = 0;
}
$title = $_GET['title'];


if(!isset($_GET['body'])){
    $_GET ['body'] = 0;
}
$body = $_GET['body'];


if(!isset($_GET['id'])){
    $_GET ['id'] = 0;
}
$id = $_GET['id'];



$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$rs = mysqli_query($db_conn, $sql);

$article = mysqli_fetch_assoc($rs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 수정</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
                수정할 것 ~<!DOCTYPE html>
<?php if($id == 0 and $title != 0 && $body or 0){?>  
        <section>게시물 번호를 입력하지 않았거나, 해당 게시물이 존재하지 않습니다.</section>
<?php }else{?>

<?php 
    
    $sqlModify = "
UPDATE article
SET regDate = regDate,
updateDate = NOW(),
title = '$title',
`body`= '$body'
WHERE id = $id;
    ";

    $rs2 = mysqli_query($db_conn, $sqlModify);


    

 $rs3 = mysqli_query($db_conn, $sqlGetId);

$article = mysqli_fetch_assoc($rs3);
$articleId = $article['id'];
    
    
    ?>

    <div class = "title"><?=$id?>번 게시물이 수정되었습니다.</div>
    


<?php  }?>
    
    
    
    
    ?>


<?php  }?>

    
</body>
</html>