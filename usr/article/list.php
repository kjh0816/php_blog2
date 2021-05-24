<?php 

$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$sql = "
SELECT * FROM article
ORDER BY id DESC;
";


$rs = mysqli_query($db_conn, $sql);



$articles = [];

while($article = mysqli_fetch_assoc($rs)){


    $articles[] = $article;

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 리스트</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <div>
    <?php foreach($articles as $article){ ?>
            번호     : <?=$article['id']?><br>
            제목     : <?=$article['title']?><br>
            작성날짜 : <?=$article['regDate']?><br>
            수정날짜 : <?=$article['updateDate']?> <br>   
    <?php } ?>
    </div>
</body>
</html>