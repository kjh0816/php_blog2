<?php 


if(!isset($_GET['id'])){
    $_GET ['id'] = 0;
}
$id = $_GET['id'];

$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$sql = "
SELECT * FROM article
WHERE id = $id;
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
    <title>게시물 상세페이지</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>

<?php if($id == 0){?>
        <section>게시물 번호를 입력하지 않았거나, 해당 게시물이 존재하지 않습니다.</section>
<?php }else{?>
    <div class ="title"><?=$article['id']?>번 게시물 상세페이지</div>
    <hr>
    <div>
    번호 : <?=$article['id']?><br>
    제목 : <?=$article['title']?><br>
    작성날짜 : <?=$article['regDate']?><br>
    수정날짜 : <?=$article['updateDate']?><br>
    내용 : <?=$article['body']?><br>
    </div>

<?php  }?>

    
</body>
</html>