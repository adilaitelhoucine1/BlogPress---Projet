<?php
include('connect.php');
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    
    echo $username;
    echo $email;
    echo $password;

        $stmt = $conn->prepare("INSERT INTO auteur (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $password]);
        
        if($stmt) {
            $message = "Registration successful!";
            header("Location: login.php");
        } else {
            $message = "Something went wrong!";
        }

  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


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
              <a href='index.php'
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

<div class="font-[sans-serif]">
      <div class="grid lg:grid-cols-2 gap-4 max-lg:gap-12 bg-gradient-to-r from-blue-500 to-blue-700 px-8 py-12 h-[320px]">
        <div>
          <a href="javascript:void(0)">
            <img src="https://readymadeui.com/readymadeui-white.svg" alt="logo" class='w-40' />
          </a>
          <div class="max-w-lg mt-16 max-lg:hidden">
            <h3 class="text-3xl font-bold text-white">Register</h3>
            <p class="text-sm mt-4 text-white">Join our community and start your journey. Create an account to access exclusive features and personalized experiences.</p>
          </div>
        </div>

        <div class="bg-white rounded-xl sm:px-6 px-4 py-8 max-w-md w-full h-max shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] max-lg:mx-auto">
          <form method="POST">
            <div class="mb-8">
              <h3 class="text-3xl font-extrabold text-gray-800">Register</h3>
            </div>

            <div>
              <label class="text-gray-800 text-sm mb-2 block">Full Name</label>
              <div class="relative flex items-center">
                <input name="username" type="text" required 
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" 
                  placeholder="Enter your full name" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                  <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                  <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5z" data-original="#000000"></path>
                </svg>
              </div>
            </div>

            <div class="mt-4">
              <label class="text-gray-800 text-sm mb-2 block">Email Address</label>
              <div class="relative flex items-center">
                <input name="email" type="email" required 
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" 
                  placeholder="Enter email address" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                  <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                </svg>
              </div>
            </div>

            <div class="mt-4">
              <label class="text-gray-800 text-sm mb-2 block">Password</label>
              <div class="relative flex items-center">
                <input name="password" type="password" required 
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" 
                  placeholder="Enter password" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                  <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                </svg>
              </div>
            </div>

            <div class="mt-4">
              <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
              <div class="relative flex items-center">
                <input name="confirm_password" type="password" required 
                  class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" 
                  placeholder="Confirm password" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                  <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                </svg>
              </div>
            </div>

            <div class="mt-8">
               <button type="submit" name="submit"
                class="w-full shadow-xl py-3 px-6 text-sm font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Register
              </button>
            </div>
            <p class="text-sm mt-8 text-center text-gray-800">Already have an account? <a href="login.php" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Login here</a></p>
          </form>
        </div>
      </div>
    </div>
</body>
</html>