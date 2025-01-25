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
                <input required type="text" name="title" id="title">
            </div>
            <div class="containerSubtitle">
                <label for="subtitle">
                    Subtítulo
                </label>
                <br>
                <input required type="text" name="subtitle" id="subtitle">
            </div>
            <div>
                <label for="paragraph">Parágrafo</label>
                <br>
                <textarea required name="paragraph" id="paragraph" rows="10"></textarea>
            </div>
            <div class="containerImg">
                <label class="imageLabel" for="imageInput"><span>Insira sua Imagem</span></label>
                <input required type="file" name="image" id="imageInput">
            </div>
            <div class="containerAuthor">
                <label for="author">Autor</label>
                <br>
                <input required type="text" name="author" id="author">
            </div>
                <button type="submit">Publicar</button>
        </form>
    </main>
    <script src="../javascript/sendPost.js"></script>
</body>
</html>