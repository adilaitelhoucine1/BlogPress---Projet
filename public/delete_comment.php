<?php
include('connect.php');

if (isset($_GET['id'])) {
   // echo $_GET['id'];
    $commentid = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM comments WHERE id_comments = ?");
    $stmt->bind_param("i", $commentid);
  
    if ($stmt->execute()) {
        echo "<script>alert('Commentaire supprimé avec succès');</script>";
        header("Location: commentmanagement.php"); 

    } else {
        echo "<script>alert('Erreur lors de la suppression');</script>";
    }
  
    $stmt->close();
  
  }



?>