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
    .top-bg {
        background-image: url('assets/images/banner/background.png');
        background-size: cover;
        position: relative;
    }
    p {
        font-size: 18px;
    }
    embed {
        min-height: 690px;
    }

    @media screen and (max-width: 690px) {
        embed {
            height: 500px;
        }
    }
    .vdo {
        width: 648px; 
        height: 364.5px;
    }
    @media screen and (max-width: 600px) {
        .vdo {
            max-width: 100%;
        }
    }
</style>

<body>
    <?php include('web-header.php'); ?>

    <section id="head" class="" style="padding: 20px;">
        <div class="row justify-content-center">
            <h2 class="text-purple text-center" style="padding-left: 20px; padding-top: 20px;">บทที่ 3</h2>
            <h1 class="text-purple text-center" style="padding-left: 20px;"><b>การใช้งานอีเมล</b></h1>
        </div>
    </section>

    <section id="objective" class="body" style="padding: 30px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-10">
                <h2 class="text-dark-purple"><b><i class="fi fi-rs-book-bookmark"></i> ตัวชี้วัด</b></h2>
                <p class="text-dark-purple">ใช้อินเทอร์เน็ตค้นหาข้อมูล ติดต่อสื่อสารและทำงานร่วมกัน ประเมินความน่าเชื่อถือของข้อมูล</p>
            </div>
            <div class="col-lg-5 col-sm-10">
                <h3 class="text-dark-purple"><b><i class="fi fi-sr-memo"></i> สาระการเรียนรู้</b></h3>
                <p class="text-white"> - การค้นหาข้อมูลในอินเทอร์เน็ต และการพิจารณาผลการค้นหา
                    <br> - การติดต่อสื่อสารผ่านอินเทอร์เน็ต เช่น อีเมล บล็อก โปรแกรมสนทนา
                    <br> - การเขียนจดหมาย (บูรณาการกับวิชาภาษาไทย)
                    <br> - การใช้อินเทอร์เน็ตในการติดต่อสื่อสารและทำงานร่วมกัน เช่น ใช้นัดหมายในการประชุมกลุ่ม ประชาสัมพันธ์กิจกรรมในห้องเรียน แลกเปลี่ยนความรู้ ความคิดเห็นในการเรียนภายใต้การดูแลของครู
                    <br> - การประเมินความน่าเชื่อถือของข้อมูล เช่น เปรียบเทียบความสอดคล้อง สมบูรณ์ ของข้อมูลจากหลายแหล่ง แหล่งต้นตอข้อมูล ผู้เรียน วันที่เผยแพร่ข้อมูล
                    <br> - ข้อมูลที่ดีต้องมีรายละเอียดครบทุกด้าน เช่น ข้อดีและข้อเสีย ประโยชน์และโทษ
                </p>
            </div>
        </div>
    </section>

    <section id="presentation" class="head" style="padding: 30px;">
        <h2 class="text-light-purple text-center"><i class="fi fi-rr-film"></i> <b>แอนิเมชัน</b> การเรียนรู้เรื่องใช้อีเมล (Email)</h2>
        <div class="row justify-content-center" style="margin-top: 20px;">
            <div class="row justify-content-center">
                <div class="text-center">
                    <iframe class="vdo" width="720" height="405" src="https://www.powtoon.com/embed/cjG8ElL4bWL/" 
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                <!--h3 class="text-purple text-center" style="margin-top: 10px"><a href="https://drive.google.com/file/d/1eKYBZVcklBH0KkMz9yLARD3N9X6wwMfK/view">
                    คลิกเพื่อดาวน์โหลด
                </a></!--h3-->
            </div>
        </div>
    </section>

    <?php include ('web-footer.php'); ?>
    
</body>


</html>