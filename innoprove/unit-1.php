<!DOCTYPE html>
<html lang="thai">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>

</head>

<style>
    body {
        margin: 0;
        font-family: kanit;
    }
    p {
        font-size: 18px;
    }
    .top-bg {
        background-image: url('assets/images/banner/background.png');
        background-size: cover;
        position: relative;
    }
    embed {
        min-height: 690px;
    }

    @media screen and (max-width: 690px) {
        embed {
            height: 500px;
        }
    }
    .scratch {
        width: 485px; 
        height: 402px;
    }
    @media screen and (max-width: 524px) {
        .scratch{
            max-width: 350px;
        }
    }
    .center-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body>
    <?php include('web-header.php'); ?>

    <section id="head" class="" style="padding: 20px;">
        <div class="row justify-content-center">
            <h2 class="text-purple text-center" style="padding-left: 20px; padding-top: 20px;">บทที่ 1</h2>
            <h1 class="text-purple text-center" style="padding-left: 20px;"><b>การใช้เหตุผลเชิงตรรกะในการแก้ปัญหา</b></h1>
        </div>
    </section>

    <section id="objective" class="bg" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <h2 class="text-dark-purple"><b><i class="fi fi-rs-book-bookmark"></i> ตัวชี้วัด</b></h2>
                <p class="text-dark-purple">ใช้เหตุผลเชิงตรรกะในการแก้ปัญหา การอธิบาย การทำงาน การคาดการณ์ผลลัพธ์จากปัญหาอย่างง่าย</p>
            </div>
            <div class="col-lg-5 col-sm-10">
                <h3 class="text-dark-purple"><b><i class="fi fi-sr-memo"></i> สาระการเรียนรู้</b></h3>
                <p class="text-purple"> - การใช้เหตุผลเชิงตรรกะเป็นการนำกฎเกณฑ์ หรือเงื่อนไขที่ครอบคลุมทุกรณีมาใช้พิจารณาในการแก้ปัญหา การอธิบายการทำงาน หรือการคาดการณ์ผลลัพธ์
                    <br> - สถานะเริ่มต้นของการทำงานที่แตกต่างกันจะให้ผลลัพธ์ที่แตกต่างกัน
                    <br> - ตัวอย่างปัญหา เช่น เกม​ Sudoku โปรแกรมทำนายตัวเลข โปรแกรมสร้างรูปเรขาคณิตตามค่าข้อมูลเข้า การจัดลำดับการทำงานบ้านในช่วงวันหยุด
                </p>
            </div>
        </div>
    </section>

    <section id="presentation" class="body" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="row justify-content-center col-10">
                <!--embed src="assets/pdf/unit 1.pdf" type="application/pdf"-->
                <!--iframe src="assets/pdf/unit 1.pdf" width="100%"></!--iframe-->
                <iframe src="https://drive.google.com/file/d/1AdoL4yLT3vMPnyMAjktBQrm6ZFwOFfG3/preview" width="640" height="480" allow="autoplay">
                </iframe>
                <h3 class="text-purple text-center" style="margin-top: 10px"><a href="https://drive.google.com/file/d/1AdoL4yLT3vMPnyMAjktBQrm6ZFwOFfG3/view">
                    คลิกเพื่อดาวน์โหลด <i class="fi fi-rs-paper-plane"></i>
                </a></h3>
            </div>
        </div>
    </section>

    <section id="game-intro" class="bg" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-10 text-center">
                <img src="assets/images/unit/unit-1-example.png" width="80%">
            </div>
            <div class="col-lg-5 col-sm-10">
                <div style="padding-top: 25%">
                    <h2 class="text-dark-purple text-center">เกมล่าขุมทรัพย์ในเขาวงกต</h2>
                    <h4 class="text-purple text-center" style="margin-top: 10px"><a href="https://drive.google.com/file/d/15TETvuB_E0aA90v1lMKUTLVn02PsLOCd/view">
                        คลิกเพื่อดูวิธีการเล่น <i class="fi fi-rs-paper-plane"></i>
                    </a></h4>
                </div>
            </div>
        </div>
    </section>
    
    <section id="game" class="head" style="padding: 30px;">
        <h2 class="text-white" style="margin-left: 25px"> เริ่มเล่นเกมได้ที่นี่ </h2>
        <div class="row justify-content-center">
            <div class="text-center">
                <iframe class="scratch" src="https://scratch.mit.edu/projects/755456912/embed" 
                    allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <?php include ('web-footer.php'); ?>
    
</body>


</html>