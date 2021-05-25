<?php 

if(!isset($_GET['id'])){
    $_GET['id'] = 0;
}

$id = $_GET['id'];

$db_conn = mysqli_connect("127.0.0.1", "jhmysql", "sbs123414", "php_blog");


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
<?php if($id == 0 ){ ?>
    <div class="negative_title">게시물 번호(id)를 입력해주세요.</div>
<?php }else{ ?>
    <?php 
        $sqlGetArticle = "
        SELECT * FROM article
        WHERE id = $id;
        ";
        $rsGetArticle = mysqli_query($db_conn, $sqlGetArticle);

        $article = mysqli_fetch_assoc($rsGetArticle);
        
        ?>
    <?php if($article == null){ ?>
        <div class="negative_title"><?=$id?>번 게시물이 존재하지 않습니다.</div>
<?php }else{ ?>
        <?php 
            $sqlDeleteArticle = "
            DELETE FROM article
            WHERE id = $id;
            ";

            $rsDeleteArticle = mysqli_query($db_conn, $sqlDeleteArticle);
            ?>

    <script>
    alert('<?=$id?>번 게시물이 삭제되었습니다.');
    location.replace('list.php');
    </script>

<?php } ?>


<?php } ?>
</body>
</html>