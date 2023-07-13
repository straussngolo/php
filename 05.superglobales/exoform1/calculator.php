<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Formulaire</h1>

            <?php 
            $nombre1 = $_GET['nombre1'] ?? null;
            $nombre2 = $_GET['nombre2'] ?? null;
            $operation = $_GET['operation'] ?? null;

        

            if ($nombre1 !== null && $nombre2 !== null) {
                if ($operator === '/') {
                    $result = $nombre1 / $nombre2;
                } else if ($operator === '*') {
                    $result = $nombre1 * $nombre2;
                } else if ($operator === '-') {
                    $result = $nombre1 - $nombre2;
                } else if ($operator === '+') {
                    $result = $nombre1 + $nombre2;
                }
            }



            ?>
             


    <form action="" method="get">
        <div>
            <label for="nombre1">Nombre 1</label>
            <input type="text" name="nombre1" id="nombre1" value="<?= $nombre1 ?>">
            <div><br>
            <label for="nombre2">Nombre 2</label>
            <input type="text" name="nombre2" id="nombre2" value="<?= $nombre2 ?>">
            </div><br>

            <div class="section">

            <label for="operation">opération</label>
            <input type="radio" name="operation" value="+">
            <label for="operation-1">Addition</label>

            <input type="radio" name="operation" value="-">
            <label for="operation-2">Soustraction</label>

            <input type="radio" name="operation" value="/">
            <label for="operation-3">Division</label>

            <input type="radio" name="operation" value="X">
            <label for="operation-4">Multiplication</label>

      

            </div>
            

            

        </div><br>

        <button>Calculer</button>
    </form>
    
</body>
</html>