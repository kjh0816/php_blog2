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
if($article == null){
    $id = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 삭제</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>

<?php if($id == 0){?>
        <section>게시물 번호를 입력하지 않았거나, 해당 게시물이 존재하지 않습니다.</section>
<?php }else{?>

<?php 
    $sqlDelete = "
        DELETE FROM article
        WHERE id = $id;
    ";

    $rs = mysqli_query($db_conn, $sqlDelete);

?>


    <div>
    <?=$id?>번 게시물이 삭제되었습니다.
    </div>
<?php  }?>

    
</body>
</html>