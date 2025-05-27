<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Home</title>
  
</head>
<body class='bg-zinc-950'>


<header class="mt-6 inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md bg-zinc-900/60 py-4 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
    <div class="px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex shrink-0">
                <a aria-current="page" class="flex items-center text-red-500 text-xl font-semibold italic" href="
                home">
                    Corintia
                </a>
            </div>
            
            <!-- Botão Hamburguer (Mobile) -->
            <button id="mobile-menu-button" class="md:hidden p-2 text-gray-700 transition-all hover:bg-gray-100/50 rounded-lg">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex md:items-center md:justify-center md:gap-5">
                <a aria-current="page" class="inline-block rounded-lg px-2 py-1  font-medium text-zinc-200  transition-all duration-200 hover:bg-zinc-800/60 hover:text-zinc-100" href="home">Home</a>
                <a class="inline-block rounded-lg px-2 py-1  font-medium text-zinc-200  transition-all duration-200 hover:bg-zinc-800/60 hover:text-zinc-100" href="sobre">Sobre</a>
                <a class="inline-block rounded-lg px-2 py-1  font-medium text-zinc-200  transition-all duration-200 hover:bg-zinc-800/60 hover:text-zinc-100" href="produtos">Produtos</a>
                <a class="inline-block rounded-lg px-2 py-1  font-medium text-zinc-200  transition-all duration-200 hover:bg-zinc-800/60 hover:text-zinc-100" href="contato">Contato</a>
            </div>
            
            <!-- Botões Desktop -->
            <div class="hidden md:flex items-center justify-end gap-3">
                <a class="hidden items-center justify-center rounded-xl bg-zinc-800/40 px-3 py-2 text-sm font-semibold text-zinc-400 shadow-sm  transition-all duration-150 hover:bg-zinc-800/60 sm:inline-flex" href="usuarios">Usuários</a>
                <a class="inline-flex items-center justify-center rounded-xl bg-red-600 px-3 py-2 text-sm font-semibold text-zinc-50 shadow-sm transition-all duration-150 hover:bg-red-500" href="frmusuario">Cadastrar</a>
            </div>
        </div>
    </div>
    
    <!-- Menu Mobile (Popup) -->
    <div id="mobile-menu" class="hidden absolute z-40 inset-x-0 mx-4 mt-2 origin-top rounded-xl bg-white/50 backdrop-blur-xl shadow-xl transition-all duration-300 ease-out transform opacity-0 scale-95">
        <div class="py-2 space-y-1">
            <a href="#" class="mobile-menu-item block px-4 py-3 text-base font-medium text-gray-900 transition hover:bg-zinc-800/50 rounded-lg mx-2">How it works</a>
            <a href="#" class="mobile-menu-item block px-4 py-3 text-base font-medium text-gray-900 transition hover:bg-zinc-800/50 rounded-lg mx-2">Pricing</a>
        </div>
        <div class="py-3 px-2 space-y-2 border-t border-gray-100/50">
            <a href="/login" class="mobile-menu-item block w-full rounded-lg bg-gray-100/50 px-4 py-2.5 text-center text-base font-semibold text-gray-900 transition hover:bg-gray-200/50 mx-2">Sign in</a>
            <a href="/login" class="mobile-menu-item block w-full rounded-lg bg-blue-600 px-4 py-2.5 text-center text-base font-semibold text-white transition hover:bg-blue-500 mx-2">Login</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuItems = document.querySelectorAll('.mobile-menu-item');
        
        // Abre/Fecha menu
        const toggleMenu = () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('opacity-0');
            mobileMenu.classList.toggle('scale-95');
            mobileMenu.classList.toggle('opacity-100');
            mobileMenu.classList.toggle('scale-100');
            
            // Animação do ícone
            const icon = menuButton.querySelector('svg');
            icon.innerHTML = mobileMenu.classList.contains('hidden') 
                ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />' 
                : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
        };
        
        // Event Listeners
        menuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });
        
        // Fecha ao clicar fora
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && e.target !== menuButton && !mobileMenu.classList.contains('hidden')) {
                toggleMenu();
            }
        });
        
        // Fecha ao clicar em um item
        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                toggleMenu();
            });
        });
    });
</script>
<main> @yield('conteudo')</main>
    

 
</body>
</html>