<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sendPost.css">
</head>
<body>
    <main>
        <form action="" method="post">
            <div class="containerTitle">
                <h1 style="text-align: center;" >Fazer publicação</h1>
                <label for="title">
                    Titulo
                </label>
                <br>
                <input type="text" name="title" id="title">
            </div>
            <div class="containerSubtitle">
                <label for="subtitle">
                    Subtítulo
                </label>
                <br>
                <input type="text" name="subtitle" id="subtitle">
            </div>
            <div>
                <label for="paragraph">Parágrafo</label>
                <br>
                <textarea name="paragraph" id="paragraph" rows="10"></textarea>
            </div>
            <dic class="containerImg">
                <label for="imageInput"></label>
                <input type="file" name="image" id="imageInput">
            </dic>
        </form>
    </main>
</body>
</html>