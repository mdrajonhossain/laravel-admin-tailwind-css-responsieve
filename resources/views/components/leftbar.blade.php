 <!-- Left Sidebar -->
 <aside id="sidebar" class="bg-teal-800 text-white w-screen md:h-screen md:w-1/5 p-4 hidden md:block">
      <ul>
        <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-600">Dashboard</a></li>
        <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-600">Profile</a></li>
        <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-600">Settings</a></li>
        <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-600">Logout</a></li>
      </ul>
    </aside>




    <script>
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
    });
  </script>