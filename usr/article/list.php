<?php 

$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$sql = "
SELECT * FROM article;
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
<div ><a href="write.php">글쓰기</a></div>
<hr>

<div>
<?php foreach($articles as $article){?>
        번호 : <?=$article['id']?><br>
        제목 : <?=$article['title']?><br>
        작성날짜 : <?=$article['regDate']?><br>
        수정날짜 : <?=$article['updateDate']?><br>
        <a href="detail.php?id=<?=$article['id']?>">상세보기</a>
        <hr>
<?php } ?>
    



</div>
    
</body>
</html>