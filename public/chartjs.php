
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

<div style=" width: 500px;height: 500px">
  <canvas id="myChart"></canvas>
</div>

<script>
  
 
  
  var data=[      
<?php
include('connect.php');
          
$author_id = 7;
$sql = "SELECT 
    COUNT(DISTINCT ar.id_artcile) AS total_articles, 
    COUNT(c.id_comments) AS total_comments, 
    SUM(ar.views) AS total_views, 
    SUM(ar.likes) AS total_likes
FROM auteur au
JOIN article ar 
    ON au.id_auteur = ar.id_auteur
LEFT JOIN comments c 
    ON ar.id_artcile = c.id_artcile
WHERE au.id_auteur = ?";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $author_id);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();
echo $row['total_comments'].",".$row['total_articles'].",".$row['total_views'].",".$row['total_likes'];
?>]; 

</script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Commentaire', 'Articles', 'Vues', 'Likes'],
      datasets: [{
        label: '# ',
        data: data,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>