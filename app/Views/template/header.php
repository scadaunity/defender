<!doctype html>
<html lang="<?= LANG ?>" class="dark">

    <head>
        <!-- PWA - INICIO -->
        <meta name="theme-color" content="green">
        <meta name="description" content="Scada Unity - PHP Framework">
        <link rel="apple-touch-icon" href="assets/img/Logo.png">
        <link rel="manifest" href="<?= baseUrl('/manifest.php') ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?= APP_TITLE; ?> </title>
        <link href="<?= baseUrl('/app.css') ?>" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
            if (
              localStorage.getItem('color-theme') === 'dark' ||
              (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
              document.documentElement.classList.add('dark');
            } else {
              document.documentElement.classList.remove('dark');
            }
        </script>
    </head>

    <body class="select-none antialiased text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-gray-900">
        <div class="" id="app">

        
