<?php
$CentroComercial = '10';
require("../00-gestorContenidos/class/conexion.php");

$nombrePlaza = nombreCC($CentroComercial);
$descPlaza = descripcionCC($CentroComercial);

echo "
<!DOCTYPE html>
<html lang=\"es\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <title>" . $nombrePlaza . " | Centro Comercial en el Sur de CDMX</title>
    <meta name=\"description\" content=\"" . $descPlaza . " Visita Plaza Universidad: moda, gastronomia, entretenimiento, servicios y mas en Av. Universidad 1000, Col. Santa Cruz Atoyac, CDMX.\" />

    <!-- SEO Meta -->
    <meta name=\"robots\" content=\"index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1\" />
    <meta name=\"author\" content=\"Plaza Universidad - Inmuebles Carso\" />
    <meta name=\"geo.region\" content=\"MX-CMX\" />
    <meta name=\"geo.placename\" content=\"Ciudad de Mexico\" />
    <meta name=\"geo.position\" content=\"19.3596;-99.1708\" />
    <meta name=\"ICBM\" content=\"19.3596, -99.1708\" />
    <link rel=\"canonical\" href=\"https://plazauniversidad.com.mx/\" />

    <!-- Open Graph -->
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:site_name\" content=\"" . $nombrePlaza . "\" />
    <meta property=\"og:title\" content=\"" . $nombrePlaza . " | Centro Comercial en CDMX\" />
    <meta property=\"og:description\" content=\"" . $descPlaza . " Moda, gastronomia, entretenimiento y servicios en el sur de la Ciudad de Mexico.\" />
    <meta property=\"og:image\" content=\"images/locales/Exteriores%20de%20plaza.jpg\" />
    <meta property=\"og:image:width\" content=\"1200\" />
    <meta property=\"og:image:height\" content=\"630\" />
    <meta property=\"og:locale\" content=\"es_MX\" />

    <!-- Twitter Card -->
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:title\" content=\"" . $nombrePlaza . " | Centro Comercial en CDMX\" />
    <meta name=\"twitter:description\" content=\"" . $descPlaza . "\" />
    <meta name=\"twitter:image\" content=\"images/locales/Exteriores%20de%20plaza.jpg\" />

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"logos/icono.ico\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"logos/icono.ico\" />
    <link rel=\"apple-touch-icon\" href=\"logos/logo.png\" />

    <!-- Preconnect for performance -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />

    <!-- CDNs -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <!-- Bootstrap 3 CSS (backend AJAX compatibility) -->
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"css/Gridmvc.css\" rel=\"stylesheet\" />
    <link href=\"css/personalizados.css\" rel=\"stylesheet\" />
    <link href=\"css/font-awesome.css\" rel=\"stylesheet\" />

    <!-- Tailwind CSS & Fonts -->
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap\" rel=\"stylesheet\" />

    <!-- Plaza-specific colors -->
    <link href=\"style.css\" rel=\"stylesheet\" />
    <link href=\"estilo-bid.css\" rel=\"stylesheet\" />

    <script>
        tailwind.config = {
            important: true,
            theme: {
                extend: {
                    colors: {
                        plaza: {
                            purple: '#4c1a74',
                            gold: '#fbbd1a',
                            magenta: '#b21a56',
                            black: '#2d0a44',
                            gray: '#f5f5f5',
                            white: '#ffffff'
                        }
                    },
                    fontFamily: {
                        serif: ['\"Playfair Display\"', 'serif'],
                        sans: ['\"Lato\"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Schema.org JSON-LD: Organization + LocalBusiness -->
    <script type=\"application/ld+json\">
    {
        \"@context\": \"https://schema.org\",
        \"@type\": \"ShoppingCenter\",
        \"name\": \"Plaza Universidad\",
        \"description\": \"Centro comercial en el sur de la Ciudad de Mexico con mas de 100 tiendas de moda, gastronomia, entretenimiento, tecnologia y servicios.\",
        \"url\": \"https://plazauniversidad.com.mx\",
        \"logo\": \"logos/logo.png\",
        \"image\": \"images/locales/Exteriores%20de%20plaza.jpg\",
        \"telephone\": [\"+525554741430\", \"+525554741680\"],
        \"email\": \"informacion.comercial@incarso.com\",
        \"address\": {
            \"@type\": \"PostalAddress\",
            \"streetAddress\": \"Av. Universidad 1000\",
            \"addressLocality\": \"Benito Juarez\",
            \"addressRegion\": \"Ciudad de Mexico\",
            \"postalCode\": \"03310\",
            \"addressCountry\": \"MX\"
        },
        \"geo\": {
            \"@type\": \"GeoCoordinates\",
            \"latitude\": 19.3596,
            \"longitude\": -99.1708
        },
        \"openingHoursSpecification\": {
            \"@type\": \"OpeningHoursSpecification\",
            \"dayOfWeek\": [\"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\", \"Sunday\"],
            \"opens\": \"11:00\",
            \"closes\": \"21:00\"
        },
        \"parentOrganization\": {
            \"@type\": \"Organization\",
            \"name\": \"Inmuebles Carso\",
            \"url\": \"https://www.inmueblescarso.com.mx\"
        },
        \"founder\": {
            \"@type\": \"Organization\",
            \"name\": \"Inmuebles Carso\"
        },
        \"foundingDate\": \"1969\",
        \"currenciesAccepted\": \"MXN\",
        \"paymentAccepted\": \"Cash, Credit Card, Debit Card\",
        \"priceRange\": \"$$\"
    }
    </script>

    <style>
        body {
            font-family: 'Lato', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            background-color: #ffffff;
            color: #333333;
        }
        html, body { max-width: 100vw; }
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
        .modal-backdrop { z-index: 40 !important; }
        .modal { z-index: 1050 !important; }
        #cerrar span.glyphicon-remove { display: none !important; }
        #cerrar::before {
            content: \"\\f00d\";
            font-family: \"Font Awesome 6 Free\";
            font-weight: 900;
            color: #ffffff;
            font-size: 22px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));
        }
        #cerrar:hover::before { color: #fbbd1a; transform: scale(1.1); }
        #cerrar { opacity: 1 !important; padding: 15px !important; transition: all 0.3s ease; }
        .fade-in-up { animation: fadeInUp 1s ease-out; }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 767px) {
            .directory-link { min-height: 36px; display: flex; align-items: center; }
        }
        .container-fluid { padding-left: 0; padding-right: 0; }
    </style>

    " . analyticsCC($CentroComercial) . "
</head>
<body class=\"bg-white text-plaza-black\">
";
?>
