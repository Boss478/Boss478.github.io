<!DOCTYPE html>
<html lang="thai">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Innoprove</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="" type="image/x-icon" />

    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <script src="assets/js/bootstrap.js"></script>

    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">


</head>

<style>
    body {
        margin: 0;
        font-family: kanit;
    }
    .top-bg {
        background-image: url('assets/images/banner/25563.jpg');
        background-size: cover;
        position: relative;
    }
    .banner {
        min-width: 100%;
        height: auto;
    }

    @media screen and (max-width: 425px) {
        .banner {
            max-width: 100%;
            height: auto;
        }
    }
    img {
        width: 100%;
    }
    #welcome {
        background: url('assets/images/banner/banner-2.png');
        background-repeat: no-repeat;
        background-size: cover;
        width: 100vw;
        height: 56.26vw;
    }
    #welcome h2 {
        margin-top: 38vw;
        margin-left: 48vw;
        text-align: center;
        width: 39vw;
        font-size: 24px;
    }
    @media screen and (max-width: 603px) {
        #welcome h2 {
            font-size: 10px;
        }
    }
</style>

<body>
    <?php include('web-header.php'); ?>

    <section id="head" class="mb-3">
        <div>
            <img class="banner" src="assets/images/banner/banner-1.png">
        </div>
    </section>

    <section id="welcome" class="mb-3" >
        <div>
            <!--img class="banner" src="assets/images/banner/banner-2.png"-->
            <a class="text-white" href="unit-1.php"><h2 class="btn border-white text-white"><b>คลิกเพื่อเข้าสู่บทเรียน</b></h2></a>
        </div>
    </section>

    <section id="announce" class="mb-3">
        <div>
            <img class="banner" src="assets/images/banner/banner-3.png">
        </div>
    </section>

    <section id="author" class="mb-3">
        <div>
            <img class="banner" src="assets/images/banner/banner-4.png">
        </div>
    </section>

    <?php include ('web-footer.php'); ?>
    
</body>


</html>