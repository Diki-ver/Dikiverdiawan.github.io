<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<ul class="flex" >
                <li class="mr-3">
                <?php
                    session_start();
                    if(isset($_SESSION["login"])) {
                        echo "<a class=\"inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white\" id=\"login\" style=\"display:none\" href=\"login.php\">Login</a>";
                        echo "<a class=\"inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white\" id=\"login\" style=\"display:show\" href=\"logout.php\">Logout</a>";
                    } else {
                        echo "<a class=\"inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white\" id=\"login\" style=\"display:show\" href=\"login.php\">Login</a>";
                        echo "<a class=\"inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white\" id=\"login\" style=\"display:none\" href=\"logout.php\">Logout</a>";
                    }
                ?>
                </li>
            </ul>
		</div>
		<div class="menu">
			<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <span class="font-semibold text-xl tracking-tight">Sertifikasi Digital</span>
                </div>
                <div class="block lg:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                    <a href="index.php" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                        Home
                    </a>
        
                    <div class="dropdown">
                        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                            Media
                        </a>
                        <div class="dropdown-content">
                            <a href="#">Instragram</a>
                            <a href="#">Facebook</a>
                            <a href="#">YouTube</a>
                        </div>
                    </div>
        
                    <div class="dropdown">
                        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                            Informasi
                        </a>
                        <div class="dropdown-content">
                            <a href="#">FAQ</a>
                            <a href="#">Event</a>
                        </div>
                    </div>
        
                    <a href="signup.php" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                            Registrasi
                        </a>
                </div>
            </nav>
		</div>
		<div class="badan">			
			<div class="sidebar">
                <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
                <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                    <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    </div>
                    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="profile.php">Profil</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="contact.php">Contact</a>
                    </nav>
                </div>
                </div>
			</div>
			<div class="content">
				<img src="gambar/1.png" alt="">
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<p>...</p>
		</div>
	</div>
</body>
</html>