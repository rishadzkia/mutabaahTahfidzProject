<!-- ===== Footer ===== -->
<footer id="contact" class="bg-primary text-primary-content/70 dark:bg-dark-primary dark:text-dark-primary-content/70 pt-16 lg:pt-24 pb-8">
  <div class="container-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-16 mb-12">
      <!-- Kolom 1: Logo & About -->
      <div>
        <a href="{{ route('home') }}" class="flex items-center space-x-2 mb-4">
          <img src="https://placehold.co/40x40/194240/FFFFFF?text=M&font=playfairdisplay" alt="Mutaba'ah Logo" class="rounded-full">
          <span class="text-2xl font-serif font-bold text-primary-content">Mutaba'ah</span>
        </a>
        <p class="text-sm leading-relaxed">
          Memudahkan pemantauan progres hafalan Quran untuk santri, pengajar, dan orang tua.
        </p>
      </div>
      
      <!-- Kolom 2: Navigasi -->
      <div>
        <h6 class="font-semibold text-primary-content mb-4">Navigasi</h6>
        <ul class="space-y-3">
          <li><a href="{{ route('home') }}" class="text-sm hover:text-primary-content transition">Home</a></li>
          <li><a href="#features" class="text-sm hover:text-primary-content transition">Fitur</a></li>
          <li><a href="{{ route('login') }}" class="text-sm hover:text-primary-content transition">Login</a></li>
          <li><a href="{{ route('register') }}" class="text-sm hover:text-primary-content transition">Register</a></li>
        </ul>
      </div>
      
      <!-- Kolom 3: Sumber Daya -->
      <div>
        <h6 class="font-semibold text-primary-content mb-4">Sumber Daya</h6>
        <ul class="space-y-3">
          <li><a href="#" class="text-sm hover:text-primary-content transition">Blog</a></li>
          <li><a href="#" class="text-sm hover:text-primary-content transition">Panduan</a></li>
          <li><a href="#" class="text-sm hover:text-primary-content transition">Pusat Bantuan</a></li>
        </ul>
      </div>

      <!-- Kolom 4: Contact Us -->
      <div>
        <h6 class="font-semibold text-primary-content mb-4">Hubungi Kami</h6>
        <ul class="space-y-3">
          <li class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-primary-content/80 mt-0.5 shrink-0" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg>
            <span class="text-sm">Jalan Pendidikan No. 1, Jakarta</span>
          </li>
          <li class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-primary-content/80 mt-0.5 shrink-0" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.822-1.423-5.383-3.985-6.806-6.806l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
            <span class="text-sm">(021) 123-4567</span>
          </li>
          <li class="flex items-center space-x-4 mt-4">
            <a href="#" class="text-primary-content/80 hover:text-primary-content transition" aria-label="Facebook">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-primary-content/80 hover:text-primary-content transition" aria-label="Twitter">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21.543 7.104c.015.16.015.32.015.48 0 4.9-3.73 10.55-10.55 10.55-2.09 0-4.04-.61-5.68-1.67.3.03.59.05.89.05 1.73 0 3.33-.59 4.6-1.58-1.62-.03-2.98-1.1-3.45-2.58.22.04.45.06.68.06.34 0 .67-.04 1-.13-1.69-.34-2.97-1.84-2.97-3.68v-.05c.5.28 1.07.45 1.68.46-.99-.67-1.64-1.8-1.64-3.06 0-.67.18-1.3.49-1.85 1.82 2.23 4.54 3.7 7.6 3.85-.06-.27-.1-.55-.1-.84 0-2.02 1.64-3.66 3.66-3.66 1.05 0 2 .44 2.66 1.15.83-.16 1.62-.47 2.34-.89-.27.85-.85 1.57-1.6 2.02.74-.09 1.44-.29 2.09-.57-.5.73-1.15 1.36-1.9 1.87z"></path></svg>
            </a>
            <a href="#" class="text-primary-content/80 hover:text-primary-content transition" aria-label="Instagram">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2c-2.717 0-3.056.01-4.122.06-1.065.05-1.79.22-2.428.46-.66.25-1.217.59-1.777 1.15-.56.56-1.04 1.117-1.29 1.778-.24 1.065-.41 1.79-.46 2.428C2.01 8.944 2 9.283 2 12s.01 3.056.06 4.122c.05 1.065.22 1.79.46 2.428.25.66.59 1.217 1.15 1.777.56.56 1.117 1.04 1.778 1.29 1.065.24 1.79.41 2.428.46 1.066.05 1.405.06 4.122.06 2.717 0 3.056-.01 4.122-.06 1.065-.05 1.79-.22 2.428-.46.66-.25 1.217-.59 1.777-1.15.56-.56 1.04-1.117 1.29-1.778.24-1.065.41-1.79.46-2.428.05-1.066.06-1.405.06-4.122s-.01-3.056-.06-4.122c-.05-1.065-.22-1.79-.46-2.428a5.31 5.31 0 00-1.15-1.777 5.31 5.31 0 00-1.777-1.29c-1.065-.24-1.79-.41-2.428-.46C15.056 2.01 14.717 2 12 2zm0 1.8c2.67 0 2.987.01 4.042.06 1.03.05 1.63.21 2.12.42.53.21.93.47 1.33.87.4.4.66.8.87 1.33.21.49.37 1.09.42 2.12.05 1.055.06 1.372.06 4.042s-.01 2.987-.06 4.042c-.05 1.03-.21 1.63-.42 2.12-.21.53-.47.93-.87 1.33-.4.4-.8.66-1.33.87-.49.21-1.09.37-2.12.42-1.055.05-1.372.06-4.042.06s-2.987-.01-4.042-.06c-1.03-.05-1.63-.21-2.12-.42-.53-.21-.93-.47-1.33-.87-.4-.4-.66-.8-.87-1.33-.21-.49-.37-1.09-.42-2.12-.05-1.055-.06-1.372-.06-4.042s.01-2.987.06-4.042c.05-1.03.21-1.63.42-2.12.21-.53.47-.93.87-1.33.4-.4.8-.66 1.33-.87.49-.21 1.09-.37 2.12-.42C9.013 3.81 9.33 3.8 12 3.8zm0 3.6c-2.42 0-4.38 1.96-4.38 4.38s1.96 4.38 4.38 4.38 4.38-1.96 4.38-4.38S14.42 7.4 12 7.4zm0 7.16c-1.52 0-2.76-1.24-2.76-2.78s1.24-2.78 2.76-2.78 2.76 1.24 2.76 2.78-1.24 2.78-2.76 2.78zM17.64 6.3c-.76 0-1.38.62-1.38 1.38s.62 1.38 1.38 1.38 1.38-.62 1.38-1.38-.62-1.38-1.38-1.38z" clip-rule="evenodd"></path></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Copyright -->
    <div class="mt-12 border-t border-primary-content/20 dark:border-dark-primary-content/20 pt-8 text-center">
      <p class="text-sm">
        &copy; <span x-text="new Date().getFullYear()"></span> Mutaba'ah. All Rights Reserved.
      </p>
    </div>
  </div>
</footer>
