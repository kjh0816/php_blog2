<?php 


if(!isset($_GET['title'])){
    $_GET ['title'] = 0;
}
$title = $_GET['title'];


if(!isset($_GET['body'])){
    $_GET ['body'] = 0;
}
$body = $_GET['body'];


$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>

<?php if($title == 0 or $body == 0){?>
        <section>제목, 내용을 입력해주세요.</section>
<?php }else{ ?>

<?php 
$sqlWrite = "
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '$title',
`body` = '$body';
";
    $rs2 = mysqli_query($db_conn, $sqlWrite);


    
$sqlGetId = "
SELECT * FROM article
WHERE id IN (SELECT MAX(id) FROM article);
";

 $rs3 = mysqli_query($db_conn, $sqlGetId);

$article = mysqli_fetch_assoc($rs3);
$articleId = $article['id'];
    
    
    ?>

    <div class = "title"><?=$articleId?>번 게시물이 추가되었습니다.</div>
    


<?php  }?>

</body>
</html>