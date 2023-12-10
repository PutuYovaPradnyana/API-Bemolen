<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BEMOLEN | TekWeb</title>

    <!-- box icons and iconify -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href={{ asset ('css/Tailwind.css') }} />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-poppins bg-bg-color text-text-color">
    <!-- header -->
    <header class="fixed top-0 left-0 w-full h-20 px-9 bg-opacity-60 bg-black border-b border-bg-color flex justify-between items-center z-50">
        <a href="#" class="text-2xl font-semibold cursor-default text-white">BEMO<span class="text-main-color text-red-600">LEN</span></a>
        <i class='bx bx-menu text-3.6rem text-text-color hidden' id="menu-icon"></i>
        <nav>
            <a href="#home" class="text-1.7rem text-white ml-4 px-3">Home</a>
            <a href="#services" class="text-1.7rem text-white ml-4 px-3">Services</a>
            <a href="#about" class="text-1.7rem text-white ml-4 px-3">About</a>
            <a href="#contact" class="text-1.7rem text-white ml-4 px-3">Contact</a>
            <a href="map.html" target="_blank" class="text-1.7rem text-white ml-4 px-3">Maps</a>
            <a href="js/cart.html" class="text-1.7rem text-white ml-4 px-9"><iconify-icon
                    icon="fluent:person-wrench-20-filled" style="font-size: 20px; px-3"></iconify-icon></a>
                    <span>
                        <a href="adminpackage" target="_blank" class="inline-block px-2.8 py-1 bg-main-color text-second-bg-color
                            rounded-full font-semibold text-sm transition duration-500 ease-in-out hover:bg-transparent
                            hover:text-main-color text-white px-3 border-2 border-red-700 border-main-color bg-gray-700">Sign In</a>
                        <a href="login.html" target="_blank" class="inline-block px-2.8 py-1 bg-main-color text-second-bg-color
                            rounded-full font-semibold text-sm transition duration-500 ease-in-out hover:bg-transparent
                            hover:text-main-color text-white px-3 border-2 border-red-700 border-main-color bg-gray-700">Sign Up</a>
                    </span>
                    
        </nav>
    </header>

    <!-- home -->
    <section class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
        style="background-image: linear-gradient(to left, rgba(0,0,0, 0.3), rgba(0,0,0, 0.6)),
        url('{{ asset('img/imgs/home.png') }}');">
        <div class="text-center">
            <h1 class="text-3.2rem font-bold mb-2 text-white text-7xl">Welcome To</h1>
            <h1 class="text-5.6rem font-bold mb-4 text-white text-5xl">Selling Motorcycles and Cars Online</h1>
            <p class="text-1.6rem text-white text-2xl mx-auto">
                Workshop is where creativity meets skill. Here, we create, repair, 
              </p>             
              <p class="mb-10 text-1.6rem text-white text-2xl mx-auto"> and shape the world. Every tool and machine has the potential to change the world.
              </p>

              <div class="flex justify-center space-x-3 mt-6">
                <a href="#" class="border-red-700 text-red-700 inline-flex items-center justify-center w-16 h-16 border-2 border-main-color rounded-full text-main-color hover:bg-main-color hover:text-second-bg-color transition duration-500 ease-in-out">
                    <i class="bx bxl-facebook text-2rem"></i>
                </a>
                <a href="#" class="border-red-700 text-red-700 inline-flex items-center justify-center w-16 h-16 border-2 border-main-color rounded-full text-main-color hover:bg-main-color hover:text-second-bg-color transition duration-500 ease-in-out">
                    <i class="bx bxl-tiktok text-2rem"></i>
                </a>
                <a href="#" class="border-red-700 text-red-700 inline-flex items-center justify-center w-16 h-16 border-2 border-main-color rounded-full text-main-color hover:bg-main-color hover:text-second-bg-color transition duration-500 ease-in-out">
                    <i class="bx bxl-instagram-alt text-2rem"></i>
                </a>
                <a href="#" class="border-red-700 text-red-700 inline-flex items-center justify-center w-16 h-16 border-2 border-main-color rounded-full text-main-color hover:bg-main-color hover:text-second-bg-color transition duration-500 ease-in-out">
                    <i class="bx bxl-youtube text-2rem"></i>
                </a>
            </div>
                         
                
            <a href="#" class="border-2 bg-red-700 border-red-700 text-white inline-block px-4 py-1 bg-main-color text-second-bg-color rounded-full font-semibold text-2xl mt-6 transition duration-500 ease-in-out hover:bg-transparent hover:text-main-color">Lihat Detail</a>


        </div>
    </section>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>
