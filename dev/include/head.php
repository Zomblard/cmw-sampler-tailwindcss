<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/eced519d56.js" crossorigin="anonymous"></script>

    <!--A UTILISER UNIQUEMENT SI ON VEUT LE SWITCH LIGHT / DARK
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>-->
</head>


<!--Attention ces font doivent être également defnie sur tailwind.config.js pour la compilation du css-->
<style>
    @font-face {  font-family: unbounded;  src:url("../dev/assets/webfonts/Unbounded-Regular.ttf");  }
    @font-face {  font-family: montserrat;  src:url("../dev/assets/webfonts/Montserrat-Regular.ttf");  }
    @font-face {  font-family: paytone;  src:url("../dev/assets/webfonts/PaytoneOne-Regular.ttf");  }
    @font-face {  font-family: sora;  src:url("../dev/assets/webfonts/Sora-Regular.ttf");  }
    @font-face {  font-family: outfit;  src:url("../dev/assets/webfonts/Outfit-Regular.ttf");  }
    @font-face {  font-family: alata;  src:url("../dev/assets/webfonts/Alata-Regular.ttf");  }
    @font-face {  font-family: titan;  src:url("../dev/assets/webfonts/TitanOne-Regular.ttf");  }
    @font-face {  font-family: pressstart;  src:url("../dev/assets/webfonts/PressStart2P-Regular.ttf");  }
</style>

<!--bg-white text-gray-600 dark:text-gray-400 dark:bg-gray-700 est une option pour le dark / Light-->
<!--font-montserrat == montserrat peut être une valeur php dynamique comme option utilisateur-->
<body class="bg-white text-gray-600 dark:text-gray-400 dark:bg-gray-700 font-montserrat">
