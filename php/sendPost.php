<?php 
    include("conection.php");
    if(isset($_POST['title'])){
        $title = $mysli->real_escape_string($_POST['title']);
        $subtitle = $mysli->real_escape_string($_POST['subtitle']);
        $paragraph = $mysli->real_escape_string($_POST['paragraph']);
        $author = $mysli->real_escape_string($_POST['author']);
        $image = $_FILES['image'];
        
        if($image["error"]){
            die("Falha ao carregar Imagem");
        }

        if($image["size"] > 4500000){
            echo '<script>alert("Imagem Muito Pesada");</script>';
            return;
        }

        $folder = "../files/";
        $newNameImg = uniqid();

        $extension = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
        $path = $folder . $newNameImg . "." . $extension;

        $send = move_uploaded_file($image["tmp_name"], $path);
        
        if($send){
            $queryCode = "INSERT INTO posts (title, subtitle, paragraph, author, path, extension) VALUES ('$title', '$subtitle', '$paragraph', '$author', '$path', '$extension')";
            $mysli->query($queryCode);
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
    <link rel="stylesheet" href="../css/sendPost.css">
</head>
<body>
    <main>
        <form action="" method="post" enctype="multipart/form-data">
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
                <input required type="file" name="image" id="imageInput" accept="image/*">
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