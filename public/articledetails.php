<?php
include('connect.php');

// Check if id_article is provided
if (isset($_GET['id_article'])) {
    $articleId = $_GET['id_article'];

    $stmt = $conn->prepare("SELECT * FROM article ar JOIN auteur au 
                            ON au.id_auteur = ar.id_auteur
                            WHERE ar.id_artcile = ?");
    $stmt->bind_param("i", $articleId);

    if ($stmt->execute()) {
        $result = $stmt->get_result(); 
        $row = $result->fetch_assoc(); 
        print_r($row);
        echo "<br>";
        
        $views = $row['views'];  
        $views++;  

        $stmtv = $conn->prepare("UPDATE article SET views = ? WHERE id_artcile = ?");
        $stmtv->bind_param("ii", $views, $articleId);

        if ($stmtv->execute()) {
            
            //  header("Location: dashboard.php"); 
            // exit;
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


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Main Container -->
  <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    

    <div class="w-full h-72 rounded-lg overflow-hidden mb-6">
      <img src="https://readymadeui.com/Imagination.webp" alt="Article Image" class="w-full h-full object-cover">
    </div>

    <div class="flex flex-col sm:flex-row justify-between items-center text-gray-600 text-sm mb-4">
      <div>
        <span>By: <span class="font-semibold text-gray-800 capitalize"><?php echo htmlspecialchars($row['username']); ?> </span></span>
        <span class="ml-4">Published: <span class="font-semibold"><?php echo htmlspecialchars($row['created_at']); ?></span></span>
      </div>
      <div class="mt-2 sm:mt-0">
        <span class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 mr-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22c-4.3 0-8.4-2.5-10.2-6.4-.1-.3-.1-.7 0-1 .1-.3.3-.6.6-.7l10-6c.4-.3.9-.3 1.3 0l10 6c.3.2.5.4.6.7.1.3.1.7 0 1C20.4 19.5 16.3 22 12 22z"></path><path d="M12 2C6.5 2 2 6.5 2 12c0 1.3.2 2.6.6 3.8L12 10l9.4 5.8c.4-1.2.6-2.5.6-3.8 0-5.5-4.5-10-10-10z"></path></svg>
          <span><?php echo htmlspecialchars($row['views']); ?> Views</span>
        </span>
      </div>
    </div>

   
    <h1 class="text-3xl font-bold text-gray-800 mb-6"><?php echo htmlspecialchars($row['title']); ?></h1>

    <div class="text-gray-700 leading-relaxed mb-8">
      <?php echo nl2br(htmlspecialchars($row['content'])); ?>
    </div>

    <div class="mt-10">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Comments</h2>

      <div class="space-y-4 mb-8">
  


      
        <div class="bg-gray-100 p-4 rounded-lg">
          <span class="block font-semibold text-gray-800">John Doe</span>
          <span class="text-sm text-gray-500">Dec 19, 2024</span>
          <p class="mt-2 text-gray-700">
            This article is amazing! I learned a lot. Thanks for sharing!
          </p>
        </div>
      </div>

      <!-- Add Comment Form -->
      <form action="add_comment.php" method="POST" class="bg-gray-50 p-6 rounded-lg shadow-md">
        <h3 class="text-lg font-semibold mb-4">Leave a Comment</h3>
        <input type="hidden" name="article_id" value="<?php echo htmlspecialchars($articleId); ?>" />
        <div class="mb-4">
          <label for="name" class="block text-gray-600 font-medium">Your Name</label>
          <input 
            type="text" 
            id="name" 
            name="name" 
            class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
            required 
          />
        </div>
        <div class="mb-4">
          <label for="comment" class="block text-gray-600 font-medium">Your Comment</label>
          <textarea 
            id="comment" 
            name="comment" 
            rows="4" 
            class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
            required></textarea>
        </div>
        <button 
          type="submit" 
          class="px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow">
          Submit Comment
        </button>
      </form>
    </div>

    <!-- Back Button -->
    <div class="mt-8">
      <a href="index.php" class="inline-block px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow">
        Back to Articles
      </a>
    </div>
  </div>

</body>
</html>
