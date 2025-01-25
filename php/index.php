<?php 
    include("conection.php");

    $sqlCode = "SELECT * FROM posts";
    $result = $mysli->query($sqlCode);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <header>
        <h1 style="text-align: center; margin: 1vh;">Blog Dinâmico</h1>
    </header>
    <button onclick="window.location.href = 'sendPost.php'">Publicar</button>
    <main class="posts">
        <?php 
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '
                        <section class="post">
                            <img src="'. $row["path"] .'" alt="">
                            <h1 style="font-size: 4vh; margin: 1vh 0;">'. $row["title"] .'</h1>
                            <h5 style="margin: 1vh 0;">'. $row["subtitle"] .'</h5>
                            <p>'. $row["paragraph"] .'</p>
                            <br>
                            <h4>Autor: ' . $row["author"] . '</h4>
                            <h4>Data: ' . $row["date"] . '</h4>
                        </section>
                    ';
                }
            }
        ?>
    </main>
</body>
</html>