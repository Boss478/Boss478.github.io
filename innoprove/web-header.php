<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-thin-straight/css/uicons-thin-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

<style>
    body {
        margin: 0;
        font-family: kanit;
    }

    header {
        background-color: #fff;
        color: #C044FA;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #000;
        box-shadow: 0px 2px #E3E3E3;
    }

    #logo {
        max-width: 50px; /* Adjust the width as per your logo size */
        height: auto;
        margin-bottom: 10px;
    }

    .links {
        display: flex;
        align-items: center;
    }

    .link {
        text-decoration: none;
        color: #C044FA;
        font-weight: bold;
        margin-right: 7px;
        padding: 5px;
        border-radius: 10px;
        transition: background-color 0.5s ease;
    }
    .link:hover {
        background-color: #C044FA;
        color: #fff;
        border-radius: 10px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 9;
    max-height: 200px; /* Set the maximum height of the dropdown content */
    overflow-y: auto; /* Add vertical scrolling if needed */
    border-radius: 5px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-link {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        z-index: 9;
        border-radius: 5px;
    }

    .dropdown-link:hover {
        background-color: #C044FA;
        color: #fff;
        border-radius: 5px;
    }
    a {
        text-decoration-line: none;

    }
</style>

<header>
    <!--a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" id="logo"></!--a-->
    <a href="index.php" style="color: black;">INNOPROVE | นวัตกรรมเพื่อการพัฒนา</a>
    <div>
        <a href="index.php" class="link"><i class="fi fi-rs-house-chimney"></i> หน้าหลัก</a>
        <div class="dropdown">
            <a class="link"><i class="fi fi-rs-book-alt"></i> บทเรียน</a>
            <div class="dropdown-content">
                <a href="unit-1.php" class="dropdown-link">บทที่ 1</a>
                <a href="unit-2.php" class="dropdown-link">บทที่ 2</a>
                <a href="unit-3.php" class="dropdown-link">บทที่ 3</a>
                <a href="unit-4.php" class="dropdown-link">บทที่ 4</a>
                <a href="unit-5.php" class="dropdown-link">บทที่ 5</a>
            </div>
        </div>
        <a href="https://drive.google.com/file/d/1XggWPIkfXXah158nhRtKeT4pJxsJN2vz/view" target="_BLANK" class="link"><i class="fi fi-ts-book-medical"></i> คู่มือการใช้งาน</a>
        <a href="index.php#author" class="link"><i class="fi fi-rr-users-alt"></i> คณะผู้จัดทำ</a>
    </div>
</header>