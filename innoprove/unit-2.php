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
</style>

<body>
    <?php include('web-header.php'); ?>

    <section id="head" class="" style="padding: 20px;">
        <div class="row justify-content-center">
            <h2 class="text-purple text-center" style="padding-left: 20px; padding-top: 20px;">บทที่ 2</h2>
            <h1 class="text-purple text-center" style="padding-left: 20px;"><b>การออกแบบและเขียนโปรแกรม</b></h1>
        </div>
    </section>

    <section id="objective" class="bg" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <h2 class="text-dark-purple"><b><i class="fi fi-rs-book-bookmark"></i> ตัวชี้วัด</b></h2>
                <p class="text-dark-purple">ออกแบบและเขียนโปรแกรมที่มีการใช้เหตุผลเชิงตรรกะอย่างง่าย ตรวจหาข้อผิดพลาดและแก้ไข</p>
            </div>
            <div class="col-lg-5 col-sm-10">
                <h3 class="text-dark-purple"><b><i class="fi fi-sr-memo"></i> สาระการเรียนรู้</b></h3>
                <p class="text-purple"> - การออกแบบโปรแกรมสามารถทำได้โดยเขียนเป็นข้อความหรือผังงาน
                    <br> - การออกแบบและเขียนโปรแกรมที่มีการตรวจสอบเงื่อนไขที่ครอบคลุมทุกกรณีเพื่อให้ได้ผลลัพธ์ที่ถูกต้องตรงความต้องการ
                    <br> - หากมีข้อผิดพลาดให้ตรวจสอบการทำงานทีละคำสั่ง เมื่อพบจุดที่ทำให้ผลลัพธ์ไม่ถูกต้อง ให้ทำการแก้ไขจนกว่าจะได้ผลลัพธ์ที่ถูกต้อง
                    <br> - การฝึกตรวจหาข้อผิดพลาดจากโปรแกรมของผู้อื่นจะช่วยพัฒนาทักษะการหาสาเหตุของปัญหาได้ดียิ่งขึ้น
                    <br> - ตัวอย่างโปรแกรม เช่น โปรแกรมตรวจสอบเลขคู่เลขคี่ โปรแกรมรับข้อมูลน้ำหนักหรือส่วนสูงแล้วแสดงผลความสมส่วนของร่างกาย โปรแกรมสั่งให้ตัวละครทำตามเงื่อนไขที่กำหนด
                    <br> - ซอฟต์แวร์ที่ใช้ในการเขียนโปรแกรม เช่น Scratch, Logo
                </p>
            </div>
        </div>
    </section>

    <section id="presentation" class="body" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="row justify-content-center col-10">
            <iframe src="https://drive.google.com/file/d/1eKYBZVcklBH0KkMz9yLARD3N9X6wwMfK/preview" width="640" height="480" allow="autoplay">
            </iframe>
                <h3 class="text-purple text-center" style="margin-top: 10px"><a href="https://drive.google.com/file/d/1eKYBZVcklBH0KkMz9yLARD3N9X6wwMfK/view">
                    คลิกเพื่อดาวน์โหลด <i class="fi fi-rs-paper-plane"></i>
                </a></h3>
            </div>
        </div>
    </section>

    <section id="game-intro" class="bg" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <p class="text-dark-purple"></p>
                <img src="assets/images/unit/unit-2-example.png" width="80%">
            </div>
            <div class="col-lg-5 col-sm-10">
                <div style="padding-top: 25%">
                    <h2 class="text-dark-purple text-center">เกมต่อบล็อกโค้ดให้น้องหมา</h2>
                    <h5 class="text-purple text-center" style="margin-top: 10px"><a href="https://drive.google.com/file/d/1GBrgcfPa6SOMUzc9w9-Gca3sRlqv0m2w/view">
                        คลิกเพื่อดาวน์โหลด <i class="fi fi-rs-paper-plane"></i>
                    </a></h5>
                </div>
            </div>
        </div>
    </section>
    
    <section id="game" class="body" style="padding: 30px;">
        <h2 class="text-dark-purple" style="margin-left: 25px">เริ่มเล่นเกมได้ที่นี่</h2>
        <div class="row justify-content-center">
            <div class="text-center">
                <iframe class="scratch" src="https://scratch.mit.edu/projects/755562857/embed" 
                    allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <?php include ('web-footer.php'); ?>
    
</body>


</html>