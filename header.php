<?php
$CentroComercial = '10';
require("../00-gestorContenidos/class/conexion.php");
echo "
<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />
    <meta http-equiv=\"Pragma\" content=\"no-cache\" />
    <meta http-equiv=\"Expires\" content=\"0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>| | " . nombreCC($CentroComercial) . " | |</title>
    <meta name=\"description\" content=\"" . descripcionCC($CentroComercial) . "\" />
    
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logos/icono.ico\" />
    <link href=\"logos/icono.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    
    <!-- CDNs for Required Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    
    <!-- Original Styles (Only if needed for backend compatibility, otherwise commented) -->
    <!-- <link href=\"css/bootstrap.css\" rel=\"stylesheet\" /> -->
    <!-- <link href=\"css/personalizados.css\" rel=\"stylesheet\" /> -->
    
    <!-- Tailwind CSS & Fonts -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap\" rel=\"stylesheet\">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        carso: {
                            brand: 'rgb(219 36 44)',
                            black: '#000000',
                            dark: '#111111',
                            gray: '#F8F9FA'
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Modal Override for Tailwind compatibility if mixing with old Bootstrap modals */
        .modal-backdrop {
            z-index: 40 !important;
        }
    </style>
    
    " . analyticsCC($CentroComercial) . "
</head>
<body class=\"bg-white text-carso-black\">
";
?>