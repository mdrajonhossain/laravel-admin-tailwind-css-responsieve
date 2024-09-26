<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

 <!-- Topbar -->
 <header class="bg-teal-600 text-white p-4 flex justify-between items-center">
    <h1 class="text-2xl">Topbar</h1>
    <!-- Mobile Menu Icon -->
    <button id="menu-toggle" class="text-white md:hidden">
      <!-- Hamburger Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </header>

    <main>
    {{ $slot }}
        
        
        {{-- {{ $slot }} --}}

    </main>

 
</body>
</html>
