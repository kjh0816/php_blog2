<?php 

$id = $_GET['id'];

$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$sql = "
SELECT * FROM article
WHERE id = $id
";

$rs = mysqli_query($db_conn, $sql);

$article = mysqli_fetch_assoc($rs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 상세 페이지</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <div>
        번호 : <?=$article['id']?><br>
        제목 : <?=$article['title']?><br>
        작성날짜 : <?=$article['regDate']?><br>
        수정날짜 : <?=$article['updateDate']?><br>
        내용 : <?=$article['body']?><br><br>
    </div>
    <div>
    <a href="modify.php?id=<?=$article['id']?>">수정하기</a>
    <a class="delete" onclick="if(!confirm('이 게시물을 삭제하시겠습니까?')){return false}" href="doDelete.php?id=<?=$article['id']?>">삭제하기</a>
    </div>
    <br>
    <div><a href="list.php">게시물 리스트로 돌아가기</a></div>
    
    
</body>
</html>