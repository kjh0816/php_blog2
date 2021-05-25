<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시물 작성</title>
</head>
<body>
<form action="doWrite.php">
<div>
<span>제목</span>
<input required placeholder="제목" type="text" name="title">
</div>
<div>
<span>내용</span>
<textarea required placeholder="내용" name="body"></textarea>
</div>
<input type="submit" value="게시글 추가">
</form>
</body>
</html>