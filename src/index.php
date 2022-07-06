<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="web profile pengajian">
        <title>Hidayah Kansai</title>
        
        <!-- link untuk font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
        <!-- link untuk css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsif.css">
    </head>
    <body>

    <!-- navbar -->
    <?php
        include_once '../include/navbar.inc.php';
    ?>
    
    <!-- home section start -->
    <div class="home-bg">
        <section class="home" id="home">
            <div class="content">
                <h3>pengajian hidayah kansai</h3>
                <p>organisasi musilmah untuk umum yang berafilasi di kansai, jepang.</p>
                <a href="homepage.php" class="btn">discover more</a>
            </div>
        </section>
    </div>
    <!-- home section end -->

    <!-- timeline start -->
    <?php
        include_once '../include/timeline.inc.php';
    ?>
    <!-- timeline end -->
    
    <!-- footer start -->
    <?php
        include_once '../include/footer.inc.php';
    ?>
    <!-- footer end -->

    <script src="../js/script.js"></script>
</body>
</html>