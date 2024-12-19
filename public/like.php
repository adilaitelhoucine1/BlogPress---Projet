<?php
include('connect.php');
if (isset($_GET['id_article'])) {
    $articleId = $_GET['id_article'];

    $stmt = $conn->prepare("SELECT * FROM article ar JOIN auteur au 
                            ON au.id_auteur = ar.id_auteur
                            WHERE ar.id_artcile = ?");
    $stmt->bind_param("i", $articleId);

    if ($stmt->execute()) {
        $result = $stmt->get_result(); 
        $row = $result->fetch_assoc(); 
        
  
        
        $likes = $row['likes'];  
        $likes++;  

        $stmtv = $conn->prepare("UPDATE article SET likes = ? WHERE id_artcile = ?");
        $stmtv->bind_param("ii", $likes, $articleId);

        if ($stmtv->execute()) {
            header("Location: articledetails.php?id_article=" . urlencode($articleId));
             exit;
        } else {
            echo "<script>alert('Error');</script>";
        }

        $stmtv->close();
    } else {
        echo "<script>alert('Error executing SELECT query');</script>";
    }

    $stmt->close();
}
?>