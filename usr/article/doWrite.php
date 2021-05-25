<?php 

if(!isset($_GET['title'])){
    $_GET['title'] = 0;
}
$title = $_GET['title'];


if(!isset($_GET['body'])){
    $_GET['body'] = 0;
}
$body = $_GET['body'];



$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");

$sql = "
INSERT INTO article
SET regDate = NOW(),
updateDate = NOW(),
title = '$title',
`body` = '$body';
";

$rs = mysqli_query($db_conn, $sql);

$articleLastId = mysqli_insert_id($db_conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성 완료</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <?php if($title == 0 or $body == 0){ ?>
        <div class="negative_title">제목(title), 내용(body)을 입력해주세요.</div>
    <?php }else{ ?>

        <script>
        alert('<?=$articleLastId?>번 게시물이 생성되었습니다.');
        location.replace('detail.php?id=<?=$articleLastId?>');
        </script>

    <?php } ?>
    
</body>
</html>