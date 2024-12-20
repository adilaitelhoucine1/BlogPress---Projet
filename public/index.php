<?php 
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<header class='flex shadow-md py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
      <div class='flex flex-wrap items-center justify-between gap-5 w-full'>
        <a href="javascript:void(0)"><img src="../images/logo.png" alt="logo" class='w-20 ' />
        </a>

        <div id="collapseMenu"
          class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
          <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
              <path
                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                data-original="#000000"></path>
              <path
                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                data-original="#000000"></path>
            </svg>
          </button>

          <ul
            class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
            <li class='mb-6 hidden max-lg:block'>
              <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
              </a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
              <a href='javascript:void(0)'
                class='hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Home</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Team</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Feature</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Blog</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>About</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'><a href='javascript:void(0)'
              class='hover:text-[#007bff] text-gray-500 block font-semibold text-[15px]'>Contact</a>
            </li>
          </ul>
        </div>

        <div class='flex max-lg:ml-auto space-x-4'>
          <button
            class='px-4 py-2 text-sm rounded-full font-bold text-white border-2 border-[#007bff] bg-[#007bff] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#007bff]' id="btn_login_home">Écrivez Votre Premier Article</button>
          <button id="toggleOpen" class='lg:hidden'>
            <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
</header>







<div class="bg-white font-[sans-serif] p-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-xl mx-auto">
          <h2 class="text-3xl font-extrabold text-gray-800 inline-block">LATEST BLOGS</h2>
          <p class="text-gray-600 text-sm mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
        </div>





        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 max-w-6xl mx-auto">
    <?php 
    $sql = "SELECT * FROM article ar JOIN auteur au ON ar.id_auteur = au.id_auteur;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
     
    ?>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden group relative">
            <img src="https://readymadeui.com/Imagination.webp"  class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-300">
            
            <div class="p-6 relative">
                <div class="text-sm text-gray-500 mb-2">
                    <span><?php echo htmlspecialchars($row['created_at']); ?></span> | 
                    <span class="font-semibold"><?php echo htmlspecialchars($row['username']); ?></span>
                </div>
                
                <h3 class="text-lg font-bold text-gray-800 hover:text-yellow-500 transition-colors">
                    <?php echo htmlspecialchars($row['title']); ?>
                </h3>
                
                <p class="text-gray-600 text-sm mt-4 line-clamp-3">
                    <?php echo htmlspecialchars($row['content']); ?>
                </p>
            </div>
            <div class="p-4 bg-gray-100 flex items-center justify-between text-gray-600 text-sm">
                <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553 3.276c.342.246.447.667.267 1.013l-2.553 4.49c-.18.318-.507.522-.867.522H7.6c-.36 0-.687-.204-.867-.522l-2.553-4.49c-.18-.346-.075-.767.267-1.013L9 10l-4.553-3.276c-.342-.246-.447-.667-.267-1.013l2.553-4.49c.18-.318.507-.522.867-.522h8.8c.36 0 .687.204.867.522l2.553 4.49c.18.346.075.767-.267 1.013L15 10z" />
                    </svg>
                    <span><?php echo htmlspecialchars($row['views']); ?> vues</span>
                </div>
                
                
                <a href="articledetails.php?id_article=<?php echo ($row['id_artcile']); ?>" class="text-blue-500 hover:underline">Lire plus</a>
            </div>
        </div>
    <?php 
        }
    } else {
        echo "<p class='text-center text-gray-600'>No articles.</p>";
    }
    ?>
</div>

    </div>

    <!-- <div class="flex gap-3	justify-around	flex-wrap">

<div style=" width: 500px;height: 500px">
  <canvas id="myChart"></canvas>
</div>

<div style=" width: 500px;height: 500px">
  <canvas id="SecondChart"></canvas>
</div> -->



</div>



<script>



  // const ctx = document.getElementById('myChart');
  
  // new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  //     datasets: [{
  //       label: '# of Votes',
  //       data: [12, 19, 3, 5, 2, 3],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });

  
 var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');
 console.log(toggleClose);
 
function handleClick() {
  if (collapseMenu.style.display === 'block') {
    collapseMenu.style.display = 'none';
  } else {
    collapseMenu.style.display = 'block';
  }
}

toggleOpen.addEventListener('click', handleClick);
toggleClose.addEventListener('click', handleClick);

var btn_home_login=document.querySelector("#btn_login_home");
console.log(btn_home_login);

btn_home_login.addEventListener("click",()=>{
  window.location='login.php'
});

</script>

</body>
</html>