<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="" x-data="appData" :class="{ 'dark': isDarkMode }">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mutaba'ah Tahfidz</title>
  
  <!-- Favicon -->
  <link rel="icon" href="https://placehold.co/32x32/194240/FFFFFF?text=M&font=playfairdisplay" type="image/png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
  
  <!-- Vite Assets -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-base-100 text-base-content">

    {{ $slot }}

  <!-- ===== Alpine.js Data & Logic ===== -->
  <script>
    function appData() {
      return {
        // Initialize dark mode from localStorage
        isDarkMode: localStorage.getItem('isDarkMode') === 'true',
        isMobileMenuOpen: false,
        isModalOpen: false,
        
        // Function to toggle dark mode
        toggleDarkMode() {
          this.isDarkMode = !this.isDarkMode;
          localStorage.setItem('isDarkMode', this.isDarkMode);
        }
      }
    }
  </script>
</body>
</html>
