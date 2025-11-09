<!-- ===== Header & Navbar ===== -->
<header  x-data="{ isScrolled: false, isMobileMenuOpen: false }" 
  @scroll.window="isScrolled = (window.scrollY > 50)"
  class="sticky top-0 z-30 w-full bg-white/95 shadow-xs backdrop-blur-xs transition-all duration-300 dark:bg-dark-base-100/90 dark:shadow-dark-neutral/20">
  <nav class="container-auto">
    <div class="flex items-center justify-between h-20">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="flex items-center space-x-2">
        <img src="https://placehold.co/40x40/194240/FFFFFF?text=M&font=playfairdisplay" alt="Mutaba'ah Logo" class="rounded-full">
        <span class="text-2xl font-serif font-bold text-primary dark:text-dark-primary">Mutaba'ah</span>
      </a>

      <!-- Navigasi Desktop -->
      <div class="hidden lg:flex items-center space-x-2">
        <a href="#features" class="px-3 py-2 rounded-md text-sm font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-200 transition">Fitur</a>
        <a href="#cta" class="px-3 py-2 rounded-md text-sm font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-200 transition">Mulai</a>
        <a href="#partners" class="px-3 py-2 rounded-md text-sm font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-200 transition">Partners</a>
      </div>

      <!-- Tombol Aksi & Toggle -->
      <div class="flex items-center space-x-4">
        <!-- Dark Mode Toggle -->
        {{-- <button @click="toggleDarkMode" class="btn-icon" aria-label="Toggle dark mode">
          <svg x-show="!isDarkMode" class="w-6 h-6" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-6.364-.386l1.591-1.591M3 12H.75m.386-6.364l1.591 1.591M12 12a2.25 2.25 0 00-2.25 2.25v.01c0 .317.031.63.09.934a3.743 3.743 0 01-1.04 1.04 3.75 3.75 0 00-4.908 4.908 3.742 3.742 0 011.04 1.04c.303.059.617.09.933.09v.01A2.25 2.25 0 0012 12zM12 12a2.25 2.25 0 012.25-2.25v-.01c0-.317-.031-.63-.09-.934a3.743 3.743 0 001.04-1.04 3.75 3.75 0 014.908-4.908 3.742 3.742 0 00-1.04-1.04c-.303-.059-.617-.09-.933-.09v-.01A2.25 2.25 0 0112 12z"></path></svg>
          <svg x-show="isDarkMode" class="w-6 h-6" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 008.25-4.502c.009-.004.017-.008.026-.013A8.962 8.962 0 0121.752 15.002z"></path></svg>
        </button> --}}
        
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-primary hidden lg:inline-flex">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-ghost hidden lg:inline-flex">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-primary hidden lg:inline-flex">Register</a>
                @endif
            @endauth
        @endif
        
        <!-- Tombol Menu Mobile -->
        <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="btn-icon lg:hidden" aria-label="Open main menu">
          <svg x-show="!isMobileMenuOpen" class="w-6 h-6" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
          <svg x-show="isMobileMenuOpen" class="w-6 h-6" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
      </div>
    </div>

    <!-- Panel Menu Mobile -->
    <div x-show="isMobileMenuOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="lg:hidden absolute top-full left-0 w-full bg-white dark:bg-dark-base-200 shadow-lg rounded-b-lg border-t border-base-100/50 dark:border-dark-base-300"
         @click.away="isMobileMenuOpen = false">
      <div class="flex flex-col space-y-2 p-4">
        <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-300 transition">Fitur</a>
        <a href="#cta" class="block px-3 py-2 rounded-md text-base font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-300 transition">Mulai</a>
        <a href="#partners" class="block px-3 py-2 rounded-md text-base font-medium text-base-content hover:text-primary hover:bg-base-100/50 dark:text-dark-base-content dark:hover:text-dark-primary dark:hover:bg-dark-base-300 transition">Partners</a>
        <div class="border-t border-base-100 dark:border-dark-base-300 pt-4 mt-2 space-y-2">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-primary w-full">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-secondary w-full">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary w-full">Register</a>
                    @endif
                @endauth
            @endif
        </div>
      </div>
    </div>
  </nav>
</header>
