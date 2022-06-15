<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <title>BLOG</title>

</head>
<body>
    <main>
        <div class="container form-group col-md-6">

            

            <?php

            include_once('../config/connection.php');
            $stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image)
            VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");

            $title = $_POST['title'];
            $data = $_POST['data'];
            $description = $_POST['description'];

            $arquivo = $_FILES['image'];

            move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
            $image = 'uploads/'.$arquivo['name'];

            $stmt->bindParam(":TITLE", $title);
            $stmt->bindParam(":DESCRIPTION", $description);
            $stmt->bindParam(":DATA", $data);
            $stmt->bindParam(":IMAGE", $image);
            $stmt->execute();

            header("Location: insert.php");
            
            echo $title."<br>";
            echo $data."<br>";
            echo $description."<br>";
            ?>

            <p><b>Inserir</b></p>

            <form action="envia.php" method="POST" enctype="multipart/form-data">

                    <label for="title">Titulo</label>
                    <div class="form-group">
                        <input type="text" name="titulo" placeholder="Digite o título">
                    </div>

                    <br>
                    <label for="data">Data</label>
                    <div class="form-group">
                        <input type="date" name="data" placeholder="dd/mm/aaaa">
                    </div>
                    <br>
                    <label for="description">Texto descritivo</label>
                    <div class="form-group">
                        <textarea name="description" rows="5">Deixe o seu recado</textarea>
                    </div>

                    <p>Insira uma imagem <br><input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image"/></p>
        
                    <div class="form-group">
                        <input type="submit" value="Publicar" class="btn-submit">
                    </div>

                </form>      
        </div>
    </main>

</body>
</html>