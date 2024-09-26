<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leftbar Menu with Submenu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 10px;
            cursor: pointer;
        }
        .sidebar ul li:hover {
            background-color: #444;
        }
        .submenu {
            display: none;
            padding-left: 20px;
        }
        .submenu li {
            padding: 8px 10px;
            background-color: #555;
        }
        .submenu li:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li class="main-menu">Main Menu 1
                <ul class="submenu">
                    <li>Submenu 1</li>
                    <li>Submenu 2</li>
                </ul>
            </li>
            <li class="main-menu">Main Menu 2
                <ul class="submenu">
                    <li>Submenu A</li>
                    <li>Submenu B</li>
                </ul>
            </li>
            <li class="main-menu">Main Menu 3
                <ul class="submenu">
                    <li>Submenu X</li>
                    <li>Submenu Y</li>
                </ul>
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.main-menu').click(function() {
                // Toggle the submenu for the clicked main menu
                $(this).children('.submenu').slideToggle(300);

                // Hide other submenus
                $('.main-menu').not(this).children('.submenu').slideUp(300);
            });
        });
    </script>
</body>
</html>
