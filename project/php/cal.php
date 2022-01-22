<?php include "connect.php"?>
<?php 
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
?>
<br>
<?php while ($row = $stmt->fetch()) : ?>
    <script>
        function plus<?=$row["p_id"]?>(){
            var piece = document.getElementById("piece<?=$row["p_id"]?>");
            var piece2 = document.getElementById("piece<?=$row["p_id"]?>add");
            var count = parseInt(piece.value) + 1;
            piece.value = count;
            piece2.value = count;
        }
        function minus<?=$row["p_id"]?>(){
            var piece = document.getElementById("piece<?=$row["p_id"]?>");
            var piece2 = document.getElementById("piece<?=$row["p_id"]?>add");
            if(piece.value > 1){
                var count = parseInt(piece.value) - 1;
                piece.value = count;
                piece2.value = count;
            }
            
    }
    </script>
<?php endwhile; ?>