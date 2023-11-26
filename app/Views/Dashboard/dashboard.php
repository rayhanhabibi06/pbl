<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="<?= base_url() ?>/src/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Kodchasan', sans-serif;
        }

        body {
            scroll-behavior: smooth;
        }
    </style>
    <title><?= isset($title) ? $title : 'Ah u forgot!' ?></title>
</head>
       
<body>
    
<div class="flex" x-data="{sidebar: false}">                        
            <?= view('Dashboard/components/sidebar.php') ?>  
            <div class="flex flex-col">
            <?= view('Dashboard/components/navbar.php') ?>
                <?= $this->renderSection('content') ?>
            </div>          
            
        </div>
</body>

</html>