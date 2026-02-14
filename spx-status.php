<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Parcel Status</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> <!-- Font Awesome for icons -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS for form styling -->
    <style>
        /* Reset default margins */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin: 0;
        }
        /* Navigation Bar Styling */
        nav {
            background-color: #0D5FFD;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: auto;
            width: auto;
            vertical-align: middle;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }
        nav ul li {
            position: relative;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Arial', sans-serif;
            padding: 6px 15px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 4px;
        }
        nav ul li a:hover {
            background-color: #005cbf;
            color: white;
        }
        /* Hamburger Menu Styling */
        .hamburger {
            display: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 5px;
        }
        /* Form Container Styling */
        .form-container {
            display: none; /* Hidden by default */
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container.active {
            display: block; /* Show in normal flow when active */
        }
        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .nav-container {
                justify-content: center;
            }
            .logo {
                margin: 0 auto;
            }
            .hamburger {
                display: block;
                position: absolute;
                left: 5px;
            }
            nav ul {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 3.0rem;
                left: 0;
                width: 100%;
                background-color: #003087;
                padding: 10px 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                text-align: left;
            }
            nav ul.active {
                display: flex;
            }
            nav ul li {
                width: 100%;
            }
            nav ul li a {
                display: block;
                padding: 10px 20px;
            }
        }
        /* Enhanced Input Field Styling */
        .form-container input {
            border: 2px solid #333 !important;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }
        .form-container input:focus {
            border-color: #0D5FFD !important;
            box-shadow: 0 0 5px rgba(13, 95, 253, 0.5);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation Bar -->
    <nav>
        <div class="nav-container">
            <div class="hamburger">
                <i class="fas fa-bars"></i> <!-- Hamburger icon -->
            </div>
            <a href="https://standardexpress.online/" class="logo">
                <img src="https://standardexpress.online/wp-content/uploads/2024/12/STANDARDEXPRESSLOGO-m-1.png" alt="Standard Express Logo">
            </a>
            <ul id="nav-menu">
                <li><a href="#" id="check-parcel">เช็คพัสดุ</a></li>
                <li><a href="forum.html">เว็บบอร์ด</a></li>
            </ul>
        </div>
    </nav>

    <!-- Form Container -->
    <div class="form-container" id="search-form">
        <div class="container mx-auto px-4 py-8 max-w-2xl">
            <div class="text-center mb-6">
                <h4 class="text-xl font-bold text-gray-800">เช็คพัสดุหรือค้นหาข้อมูล</h4>
            </div>
            <form method="post" action="process.php" class="space-y-6">
                <div class="relative">
                    <input 
                        type="text" 
                        id="inputValue" 
                        name="inputValue" 
                        required 
                        class="w-full px-4 py-3 pl-10 border-b-2 border-gray-300 text-lg focus:outline-none focus:border-blue-500"
                        placeholder="กรอกข้อมูลที่ต้องการค้นหา"
                    >
                    <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                </div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-bold text-lg"
                >
                    ค้นหา
                </button>
            </form>
        </div>
    </div>

    <!-- Example Additional Container for Demonstration -->
   
         <div class="form-container" id="search-form">
             
                    <div class="text-center mb-6">
                       
                        <h1 class="text-3xl font-bold text-gray-800">ค้นหาข้อมูล</h1>
                    </div>
                    <form method="post" action="process.php" class="space-y-6">
                        <div class="relative">
                            <input 
                                type="text" 
                                id="inputValue" 
                                name="inputValue" 
                                required 
                                class="w-full px-4 py-3 pl-10 border-b-2 border-gray-300 text-lg focus:outline-none focus:border-blue-500"
                                placeholder="กรอกข้อมูลที่ต้องการค้นหา"
                            >
                            <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                        </div>
                        <button 
                            type="submit" 
                            class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-bold text-lg"
                        >
                            ค้นหา
                        </button>
                    </form>
                </div>
    </div>

    <script>
        // Toggle hamburger menu on mobile
        const hamburger = document.querySelector('.hamburger');
        const menu = document.getElementById('nav-menu');
        const form = document.getElementById('search-form');

        hamburger.addEventListener('click', function() {
            menu.classList.toggle('active');
            form.classList.remove('active'); // Hide form when menu is toggled
        });

        // Show form when "เช็คพัสดุ" is clicked
        document.getElementById('check-parcel').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            form.classList.toggle('active'); // Toggle form visibility
            menu.classList.remove('active'); // Hide menu when form is shown
        });
    </script>
</body>
</html>
<style>
/* Typography */
.font-weight-400 {
    font-weight: 400;
}
.italic {
    font-style: italic;
}
.caps {
    text-transform: uppercase;
}
.caps1 {
    text-transform: capitalize;
}

/* Table Styling */
.table {
    display: table;
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    border-spacing: 0;
    border-collapse: collapse;
    background-color: transparent;
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #ddd;
    padding: 8px;
    line-height: 1.42857143;
}
.table-responsive {
    min-height: .01%;
    overflow-x: auto;
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #ddd;
    padding: 8px;
    line-height: 1.42857143;
}

/* Overflow Handling */
.overflow-hidden {
    overflow: hidden;
}
.overflow-y-auto {
    overflow: auto;
}
.overflow-auto {
    overflow: auto;
}

/* Clearfix */
.clearfix:after,
.clearfix:before {
    content: " ";
    display: table;
}
.clearfix:after {
    clear: both;
}

/* Floats */
.left {
    float: left;
}
.right {
    float: right;
}

/* Width and Max Width */
.fit {
    max-width: 100%;
}
.max-width-1 {
    max-width: 24rem;
}
.max-width-2 {
    max-width: 32rem;
}
.max-width-3 {
    max-width: 48rem;
}
.max-width-4 {
    max-width: 64rem;
}

/* Height and Width 100% */
.h-100 {
    height: 100%;
}
.w-100 {
    width: 100%;
}

/* Box Sizing */
.border-box {
    box-sizing: border-box;
}

/* Vertical Alignment */
.align-baseline {
    vertical-align: baseline;
}
.align-top {
    vertical-align: top;
}
.align-middle {
    vertical-align: middle;
}
.align-bottom {
    vertical-align: bottom;
}

/* Margins and Paddings */
.m0 {
    margin: 0;
}
.mt0 {
    margin-top: 0;
}
.mr0 {
    margin-right: 0;
}
.mb0 {
    margin-bottom: 0;
}
.ml0,
.mx0 {
    margin-left: 0;
}
.mx0 {
    margin-right: 0;
}
.my0 {
    margin-top: 0;
    margin-bottom: 0;
}
.m05 {
    margin: .5rem;
}
.mt05 {
    margin-top: .5rem;
}
.mr05 {
    margin-right: .5rem;
}
.mb05 {
    margin-bottom: .5rem;
}
.ml05,
.mx05 {
    margin-left: .5rem;
}
.mx05 {
    margin-right: .5rem;
}
.my05 {
    margin-top: .5rem;
    margin-bottom: .5rem;
}
.m1 {
    margin: 1rem;
}
.mt1 {
    margin-top: 1rem;
}
.mr1 {
    margin-right: 1rem;
}
.mb1 {
    margin-bottom: 1rem;
}
.ml1,
.mx1 {
    margin-left: 1rem;
}
.mx1 {
    margin-right: 1rem;
}
.my1 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}
.m2 {
    margin: 1.5rem;
}
.mt2 {
    margin-top: 1.5rem;
}
.mr2 {
    margin-right: 1.5rem;
}
.mb2 {
    margin-bottom: 1.5rem;
}
.ml2,
.mx2 {
    margin-left: 1.5rem;
}
.mx2 {
    margin-right: 1.5rem;
}
.my2 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.m3 {
    margin: 2rem;
}
.mt3 {
    margin-top: 2rem;
}
.mr3 {
    margin-right: 2rem;
}
.mb3 {
    margin-bottom: 2rem;
}
.ml3,
.mx3 {
    margin-left: 2rem;
}
.mx3 {
    margin-right: 2rem;
}
.my3 {
    margin-top: 2rem;
    margin-bottom: 2rem;
}
.m4 {
    margin: 2.5rem;
}
.mt4 {
    margin-top: 2.5rem;
}
.mr4 {
    margin-right: 2.5rem;
}
.mb4 {
    margin-bottom: 2.5rem;
}
.ml4,
.mx4 {
    margin-left: 2.5rem;
}
.mx4 {
    margin-right: 2.5rem;
}
.my4 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
}
.mxn1 {
    margin-left: -1rem;
    margin-right: -1rem;
}
.mxn2 {
    margin-left: -1.5rem;
    margin-right: -1.5rem;
}
.mxn3 {
    margin-left: -2rem;
    margin-right: -2rem;
}
.mxn4 {
    margin-left: -2.5rem;
    margin-right: -2.5rem;
}
.ml-auto {
    margin-left: auto;
}
.mr-auto,
.mx-auto {
    margin-right: auto;
}
.mx-auto {
    margin-left: auto;
}

/* Padding Utilities */
.p0 {
    padding: 0;
}
.pt0 {
    padding-top: 0;
}
.pr0 {
    padding-right: 0;
}
.pb0 {
    padding-bottom: 0;
}
.pl0,
.px0 {
    padding-left: 0;
}
.px0 {
    padding-right: 0;
}
.py0 {
    padding-top: 0;
    padding-bottom: 0;
}
.p05 {
    padding: .5rem;
}
.pt05 {
    padding-top: .5rem;
}
.pr05 {
    padding-right: .5rem;
}
.pb05 {
    padding-bottom: .5rem;
}
.pl05 {
    padding-left: .5rem;
}
.py05 {
    padding-top: .5rem;
    padding-bottom: .5rem;
}
.px05 {
    padding-left: .5rem;
    padding-right: .5rem;
}
.p1 {
    padding: 1rem;
}
.pt1 {
    padding-top: 1rem;
}
.pr1 {
    padding-right: 1rem;
}
.pb1 {
    padding-bottom: 1rem;
}
.pl1 {
    padding-left: 1rem;
}
.py1 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.px1 {
    padding-left: 1rem;
    padding-right: 1rem;
}
.p2 {
    padding: 1.5rem;
}
.pt2 {
    padding-top: 1.5rem;
}
.pr2 {
    padding-right: 1.5rem;
}
.pb2 {
    padding-bottom: 1.5rem;
}
.pl2 {
    padding-left: 1.5rem;
}
.py2 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}
.px2 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.p3 {
    padding: 2rem;
}
.pt3 {
    padding-top: 2rem;
}
.pr3 {
    padding-right: 2rem;
}
.pb3 {
    padding-bottom: 2rem;
}
.pl3 {
    padding-left: 2rem;
}
.py3 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.px3 {
    padding-left: 2rem;
    padding-right: 2rem;
}
.p4 {
    padding: 2.5rem;
}
.pt4 {
    padding-top: 2.5rem;
}
.pr4 {
    padding-right: 2.5rem;
}
.pb4 {
    padding-bottom: 2.5rem;
}
.pl4 {
    padding-left: 2.5rem;
}
.py4 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
}
.px4 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
}

/* Container Styles */
.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.container {
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 576px) {
    .container {
        width: 540px;
        max-width: 100%;
    }
}
@media (min-width: 768px) {
    .container {
        width: 720px;
        max-width: 100%;
    }
}
@media (min-width: 992px) {
    .container {
        width: 960px;
        max-width: 100%;
    }
}
@media (min-width: 1182px) {
    .container {
        width: 1170px;
    }
}
@media (min-width: 1300px) {
    .container {
        width: 1280px;
    }
}

/* Breadcrumb Styles */
.breadcrumb {
    margin-bottom: 20px;
    list-style: none;
    border-radius: 4px;
    z-index: 20;
    position: relative;
}


/* Row and Column Layout */
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}
.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
}
.col,
.col-right {
    box-sizing: border-box;
}
.col-right {
    float: right;
}
.col-1 {
    width: 8.33333%;
}
.col-2 {
    width: 16.66667%;
}
.col-3 {
    width: 25%;
}
.col-4 {
    width: 33.33333%;
}
.col-5 {
    width: 41.66667%;
}
.col-6 {
    width: 50%;
}
.col-7 {
    width: 58.33333%;
}
.col-8 {
    width: 66.66667%;
}
.col-9 {
    width: 75%;
}
.col-10 {
    width: 83.33333%;
}
.col-11 {
    width: 91.66667%;
}
.col-12 {
    width: 100%;
}
@media (min-width: 40.06rem) {
    .sm-col {
        float: left;
        box-sizing: border-box;
    }
    .sm-col-right {
        float: right;
        box-sizing: border-box;
    }
    .sm-col-1 {
        width: 8.33333%;
    }
    .sm-col-2 {
        width: 16.66667%;
    }
    .sm-col-3 {
        width: 25%;
    }
    .sm-col-4 {
        width: 33.33333%;
    }
    .sm-col-5 {
        width: 41.66667%;
    }
    .sm-col-6 {
        width: 50%;
    }
    .sm-col-7 {
        width: 58.33333%;
    }
    .sm-col-8 {
        width: 66.66667%;
    }
    .sm-col-9 {
        width: 75%;
    }
    .sm-col-10 {
        width: 83.33333%;
    }
    .sm-col-11 {
        width: 91.66667%;
    }
    .sm-col-12 {
        width: 100%;
    }
}
@media (min-width: 52.06rem) {
    .md-col {
        float: left;
        box-sizing: border-box;
    }
    .md-col-right {
        float: right;
        box-sizing: border-box;
    }
    .md-col-1 {
        width: 8.33333%;
    }
    .md-col-2 {
        width: 16.66667%;
    }
    .md-col-3 {
        width: 25%;
    }
    .md-col-4 {
        width: 33.33333%;
    }
    .md-col-5 {
        width: 41.66667%;
    }
    .md-col-6 {
        width: 50%;
    }
    .md-col-7 {
        width: 58.33333%;
    }
    .md-col-8 {
        width: 66.66667%;
    }
    .md-col-9 {
        width: 75%;
    }
    .md-col-10 {
        width: 83.33333%;
    }
    .md-col-11 {
        width: 91.66667%;
    }
    .md-col-12 {
        width: 100%;
    }
}
@media (min-width: 64.06rem) {
    .lg-col {
        float: left;
        box-sizing: border-box;
    }
    .lg-col-right {
        float: right;
        box-sizing: border-box;
    }
    .lg-col-1 {
        width: 8.33333%;
    }
    .lg-col-2 {
        width: 16.66667%;
    }
    .lg-col-3 {
        width: 25%;
    }
    .lg-col-4 {
        width: 33.33333%;
    }
    .lg-col-5 {
        width: 41.66667%;
    }
    .lg-col-6 {
        width: 50%;
    }
    .lg-col-7 {
        width: 58.33333%;
    }
    .lg-col-8 {
        width: 66.66667%;
    }
    .lg-col-9 {
        width: 75%;
    }
    .lg-col-10 {
        width: 83.33333%;
    }
    .lg-col-11 {
        width: 91.66667%;
    }
    .lg-col-12 {
        width: 100%;
    }
}

/* Flexbox Utilities */
.flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
@media (min-width: 40.06rem) {
    .sm-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
}
@media (min-width: 52.06rem) {
    .md-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
}
@media (min-width: 64.06rem) {
    .lg-flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
}
.flex-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.flex-wrap {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.flex-auto {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-width: 0;
    min-height: 0;
}
.flex-none {
    -webkit-box-flex: 0;
    -ms-flex: none;
    flex: none;
}
.flex-center {
    align-items: center;
    justify-content: center;
}

/* Positioning Utilities */
.relative {
    position: relative;
}
.absolute {
    position: absolute;
}
.fixed {
    position: fixed;
}

/* Z-index Utilities */
.z1 {
    z-index: 1;
}
.z2 {
    z-index: 2;
}
.z3 {
    z-index: 3;
}
.z4 {
    z-index: 4;
}

/* Border Styles */
.border {
    border-style: solid;
    border-width: 1px;
}
.border-top {
    border-top-style: solid;
    border-top-width: 1px;
}
.border-right {
    border-right-style: solid;
    border-right-width: 1px;
}
.border-bottom {
    border-bottom-style: solid;
    border-bottom-width: 1px;
}
.border-left {
    border-left-style: solid;
    border-left-width: 1px;
}
.border-none {
    border: 0;
}
.border,
.border-left,
.border-bottom,
.border-right,
.border-top {
    border-color: #ddd;
}


/* Visibility Utilities */
.hide {
    position: absolute;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
}
@media (max-width: 40rem) {
    .xs-hide {
        display: none;
    }
}
@media (min-width: 40.06rem) and (max-width: 52rem) {
    .sm-hide {
        display: none;
    }
}
@media (min-width: 52.06rem) and (max-width: 64rem) {
    .md-hide {
        display: none;
    }
}
@media (min-width: 64.06rem) {
    .lg-hide {
        display: none;
    }
}

/* Typography */
.display-none {
    display: none;
}
* {
    box-sizing: border-box;
}
@media (max-width: 52rem) {
    body {
       
    }
}

.trackcontainer {
    height: 600px;
    width: 100%;
    position: relative;
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    color: #757575;
    font-size: 14px;
    overflow: hidden;
}
.trackcontainer .iframebox {
    position: absolute;
    top: -60px;
    width: 100%;
    left: 0;
    border: 0;
}
.trackcontainer .top {
    width: 100%;
    background: #fff;
    position: absolute;
    bottom: 35px;
    height: 70px;
    line-height: 120px;
    right: auto;
    text-align: left;
    padding-left: 10px;
}
.trackcontainer .bottom {
    position: absolute;
    height: 30px;
    background: #fff;
    bottom: 3px;
    width: 200px;
    right: 10px;
    line-height: 30px;
    text-align: right;
}
.trackcontainer .msk {
    top: 60px;
    right: 10px;
    position: absolute;
    height: 25px;
    width: 100px;
    background: #fff;
    z-index: 999;
}
 
    </style>
<?php
// ตรวจสอบว่ามีค่า track_no ถูกส่งมาหรือไม่
if (isset($_GET['track_no']) && !empty($_GET['track_no'])) {
    // ถ้ามีค่า track_no ถูกส่งมา จะแสดง iframe ของ 17Track
    ?>

<div class="max-width-4 mx-auto mb4">
<style>
        h5 {
            text-align: center; /* จัดข้อความให้อยู่ตรงกลางในแนวนอน */
            margin-top: 10px; /* ระยะห่างด้านบน */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            color: #333; /* สีตัวอักษร */
        }
    </style>
</head>
<body>
   
<div class="container">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .tracking-container {
            display: flex;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .icon {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .icon i {
            font-size: 17px;
        }
        .details {
            font-size: 14px;
        }
        .tracking-number {
            font-weight: bold;
            margin-bottom: 2px;
        }
        .copy-icon {
            margin-left: 5px;
            color: #6c757d;
            cursor: pointer;
        }
        .status {
            color: #555;
        }
    </style>
</head>
<body>
 <div class="tracking-container">
    <div class="icon">
        <i class="fas fa-truck"></i>
    </div>
    <div class="details">
        <div class="status">
            <a href="https://expresstracking.onthewifi.com/status-spxth.php?track_no=<?php echo htmlspecialchars($_GET["track_no"] ?? ""); ?>" target="_blank" class="status-button">
                <span id="trackNumber"><?php echo htmlspecialchars($_GET["track_no"] ?? ""); ?></span>
                <i class="fas fa-copy copy-icon" title="Copy" onclick="copyToClipboard(); event.preventDefault();"></i>
                <span class="button-text">ดูสถานะพัสดุ</span>
            </a>
        </div>
    </div>
</div>

<style>
    .tracking-container {
        display: flex;
        align-items: center;
        font-family: Arial, sans-serif;
        padding: 10px; /* Added small padding around the container */
    }
    .icon {
        background-color: #007bff;
        color: white;
        padding: 10px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }
    .icon i {
        font-size: 17px; /* Larger plane icon */
    }
    .details {
        font-size: 14px;
    }
    .status-button {
        display: flex;
        align-items: center;
        background-color: #007bff;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        gap: 8px;
    }
    .status-button:hover {
        background-color: #0056b3;
        color: white;
    }
    #trackNumber {
        font-weight: bold;
    }
    .copy-icon {
        color: white;
        cursor: pointer;
    }
    .button-text {
        white-space: nowrap;
    }
</style>

<script>
    function copyToClipboard() {
        var trackNumber = document.getElementById("trackNumber").innerText;
        var tempInput = document.createElement("input");
        tempInput.value = trackNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("หมายเลขพัสดุ " + trackNumber + " ได้ถูกคัดลอกแล้ว!");
    }
</script>
</body>
</html>
</html>
<center></div>
<style>
img {
  max-width: 80%;
  height: auto;
}
</style>
</head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-format="fluid"
     data-ad-layout="in-article"
     data-ad-client="ca-pub-8042000593277847"
     data-ad-slot="2099440815"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="col-12 md-col-8">
<div class="trackcontainer">
<iframe height="660" layout="fixed-height" sandbox="allow-scripts allow-same-origin" resizable class="iframebox" src="https://extcall.17track.net/en/track#apitype=1&nums=<?php echo htmlspecialchars($_GET["track_no"] ?? ""); ?>&fc=100410&sc=0"></iframe>
                            </iframe>
<div class="msk"></div>
<div class="top">Click the following<span>'
<svg style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M549.12 643.2l-108.373333-107.093333 1.28-1.28c74.24-82.773333 127.146667-177.92 158.293333-278.613334H725.333333V170.666667H426.666667V85.333333h-85.333334v85.333334H42.666667v84.906666h476.586666A673.834667 673.834667 0 0 1 384 484.266667a672.853333 672.853333 0 0 1-98.56-142.933334h-85.333333c31.146667 69.546667 73.813333 135.253333 127.146666 194.56L110.293333 750.293333 170.666667 810.666667l213.333333-213.333334 132.693333 132.693334 32.426667-86.826667zM789.333333 426.666667h-85.333333l-192 512h85.333333l48-128h202.666667L896 938.666667h85.333333l-192-512z m-112 298.666666L746.666667 540.373333 816 725.333333h-138.666667z" fill></path></svg>
' </span>
to translate:
</div>
 <div class="bottom">Track: Spx TH</div>
        </div>
    </div>
	<div class="container">

<li><b>หากท่านกำลังมองหาสถานะพัสดุอินเตอร์เนชั่นแนลเอ็กซ์เพรสอยู่ใช่หรือเปล่า พัสดุ international express เป็นพัสดุที่จะถูกจัดส่งมาจากต่างประเทศ ดังนั้นหมายเลขพัสดุช่วงแรก จะเป็นเพียงเลขที่ไว้อ้างอิงในการจัดส่งเท่านั้น จะยังไม่พบสถานะจนกว่าพัสดุจะเดินทางมาถึงประเทศไทย จากนั้นเลขพัสดุ International Express จะถูกเปลี่ยนเป็นเลขพัสดุของขนส่งไทย :ซึ่งเมื่อได้เลขจากขนส่งไทยแล้ว ท่านจึงจะเริ่มเช็คสถานะได้ โดยนำหมายเลขพัสดุมาเช็คได้ที่นี่อีกครั้ง</b></li>
	 
	<br>
<form method="post" action="process.php" class="space-y-6" style="max-width: 500px; margin: auto;">
    <div style="position: relative;">
        <input 
            type="text" 
            id="inputValue" 
            name="inputValue" 
            required 
            style="
                width: 100%;
                padding: 12px 16px 12px 40px;
                font-size: 16px;
                border: 2px solid #ccc;
                border-radius: 8px;
                box-sizing: border-box;
                outline: none;
                transition: border-color 0.3s;
            "
            placeholder="กรอกข้อมูลที่ต้องการค้นหา"
            onfocus="this.style.borderColor='#0056b3'" 
            onblur="this.style.borderColor='#ccc'"
        >
        <i 
            class="fas fa-search" 
            style="
                position: absolute; 
                left: 12px; 
                top: 50%; 
                transform: translateY(-50%);
                color: #999;
            "
        ></i>
    </div>
    <button 
        type="submit" 
        style="
            width: 100%; 
            background-color: #0056b3; 
            color: white; 
            padding: 12px; 
            border: none; 
            border-radius: 8px; 
            font-size: 16px; 
            cursor: pointer; 
            font-weight: bold;
            transition: background-color 0.3s;
        "
        onmouseover="this.style.backgroundColor='#003f8c'"
        onmouseout="this.style.backgroundColor='#0056b3'"
    >
        ค้นหา
    </button>
</form>

	
	
	</center>
    <?php
} else {
    // ถ้าไม่มีค่า track_no ถูกส่งมา จะแสดงลิงก์แทน
    ?>
    <a href="https://atth.me/adv.php?rk=00728v0006ht" target="_blank">
        <img src="https://imp.accesstrade.in.th/img.php?rk=00728v0006ht" border="0"/>
    </a>
<title>Tracking Page - Hyperlink</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h3>Enter Tracking Number</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                                 <p class="lead">Enter your tracking number to view the status of your package.</p>
                </div>
                <form action="page30-in.php" method="GET">
                    <div class="form-group">
                       
                        <input type="text" class="form-control" id="trackingNumber" name="track_no" placeholder="Enter tracking number" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Track</button>
                </form>
    <?php
}
?>
<div class="container">


วิธีเช็คพัสดุทุกขนส่ง</span></p>
<p class="MsoNormal">

1.ใส่หมายเลขพัสดุแล้วกด ค้นหา จากนั้นระบบจะแสดงขนส่งให้ท่านเลือก 
โดยท่านสามารถเลือกขนส่งที่ต้องการดูสถานะได้ทันที</span></p>
<p class="MsoNormal">

2.กรณีเลือกขนส่งผิด อาจทำให้ไม่พบสถานะ 
ท่านสามารถเช็คพัสดุใหม่และเลือกขนส่งอีกครั้ง</span></p>
<p class="MsoNormal">

3.กรณีที่ต้องการเลือกขนส่งก่อนทำการเช็คสามารถเลือกขนส่งที่ต้องการก่อน 
จากนั้นจึงทำการเช็คซึ่งระบบจะแสดงสถานะในขนส่งนั้นๆทันที</span></p>
<p class="MsoNormal">

4.สำหรับพัสดุจากต่างประเทศเช่น พัสดุ </span>International express- ส่งจากต่างประเทศ

หมายเลขพัสดุที่ขึ้นต้นด้วย </span>TH

จะยังไม่ใข่เลขพัสดุที่สามารถเช็คออนไลน์ได้ จะต้องรอให้พัสดุถึงประเทศไทยก่อน 
จากนั้นจึงจะเปลี่ยนเป็นเลขพัสดเป็นของขนส่งไทย จึงจะสามารถนำเลขพัสดุของขนส่งไทย 
มาเช็คได้อีกครั้ง แต่กรณร้านค้าของ </span>Shopee

ที่จัดส่งจากร้านค้าในประเทศสามารถเช็คพัสดุได้ทันทีตามปกติ</span></p>
<p class="MsoNormal">

อื่นๆสามารถโพสน์ได้ที่เว็บบอร์ด</span></p>


วิธีเช็คพัสดุและสอบถามปัญหา ไปรษณีย์ไทย</span></p>
<p class="MsoNormal">

1.ศูนย์บริการลูกค้าไปรษณีย์ 1545</span></p>
<p class="MsoNormal">

2.สอบถามข้อมูลทั่วไป ติดตามสิ่งของฝากส่งทางไปรษณีย์ และ ร้องเรียนการให้บริการ
  เวลาทำการ
วันจันทร์ - วันศุกร์      08.00 - 18.00 น.
วันเสาร์ วันอาทิตย์ วันหยุดนักขัตฤกษ์ และวันหยุดชดเชย        09.00 - 17.00 น.</span></p>
<p class="MsoNormal">

3.เบอร์ติดต่อ 0 2982 8222
  สอบถามบริการ EMS World Pickup , บริการอร่อยทั่วไทยสั่งได้ที่ไปรษณีย์, บริการจองตั๋วรถทัวร์และตั๋วเครื่องบิน
  เวลาทำการ
วันจันทร์ - วันศุกร์        08.00 - 16.00 น.
วันเสาร์                       09.00 - 12.00 น.</span></p>
<p class="MsoNormal">

4.E-mail : postalcare@thailandpost.com
  สอบถามข้อมูลทั่วไป ติดตามสิ่งของฝากส่งทางไปรษณีย์ และ ร้องเรียนการให้บริการ</span></p>
<p class="MsoNormal">

ติดต่อ THP Contact Center 1545</span></p>

วิธีเช็คพัสดุแฟลชเอ็กเพรส</span></p>
<p class="MsoNormal">

1.ถ้าไม่ทราบเลขพัสดุของตนเองจะสามารถติดตามสถานะพัสดุได้หรือไม่</span></p>
<p class="MsoNormal">

1.2.ท่านสามารถติดตามพัสดุได้ โดยเราขอแนะนำให้ท่านสมัครบัญชีFlash Express เพื่อความสะดวกในการใช้งาน และสามารถดำเนินตามขั้นตอนต่อไปนี้

( สำหรับผู้ส่ง )

1. หากท่านไม่ทราบเลขพัสดุ ท่านสามารถค้นหาเลขพัสดุนั้นได้จากข้อมูลการเข้ารับพัสดุของผ่านทางข้อความหรืออีเมลล์ (เฉพาะลูกค้าธุรกิจ)

2. ล็อกอินบัญชี Flash Express App》พัสดุของฉัน  》รายการพัสดุที่จัดส่ง รายละเอียดการจัดส่งพัสดุจะแสดงในหน้านี้ และสามารถระบุเลขพัสดุ/ชื่อผู้รับ/เบอร์โทรเพื่อค้นหาพัสดุ

(สำหรับผู้รับ)

3. ล็อกอินบัญชี Flash Express App》พัสดุของฉัน  》รายการพัสดุที่ได้รับ รายละเอียดพัสดุที่ได้รับจะแสดงหน้านี้ และสามารถระบุเลขพัสดุ/ชื่อผู้รับ/เบอร์โทรเพื่อค้นหาพัสดุ</span></p>
<p class="MsoNormal">

2.ทำไมสถานะพัสดุของฉันถึงไม่มีการอัพเดท?</span></p>
<p class="MsoNormal">

2.1.วนใหญ่การที่สถานะของพัสดุไม่มีการอัพเดท อาจเกิดได้จากการล่าช้าในการขนส่งชั่วคราวหรือระบบที่อัพเดทสถานะพัสดุมีความล่าช้า โดยปกติจะไม่เกิน 2 วัน หากพัสดุของท่านไม่มีการอัพเดทเลยเกิน 2-3 วัน อาจเป็นไปได้ว่าพัสดุของคุณจะเกิดปัญหา ท่านสามารถค้นหาหรือสอบถามสถานะพัสดุ ได้จากหน้าติดตามพัสดุในเว็บไซต์ของเรา หรือติดต่อที่ฝ่ายบริการลูกค้า 1436</span></p>
<p class="MsoNormal">

สามารถเปลี่ยนหรือแก้ไขที่อยู่ปลายทางได้หรือไม่?  :: สามารถเปลี่ยนแปลงได้ ตามเงื่อนไขดังนี้

1. หากพนักงานขนส่งเข้ารับพัสดุแล้ว แต่ยังไม่ได้จัดส่งไปยังสาขา ท่านสามารถติดต่อพนักงานขนส่งเพื่อแก้ไขข้อมูล

2.ท่านสามารถแก้ไขที่อยู่โดยละเอียดผ่านแอพพลิเคชันเมนูกำลังจัดส่ง โดยจะไม่สามารถแก้ไขจังหวัด อำเภอหรือตำบลได้

3.แต่หากคุณคือผู้ส่งพัสดุ คุณสามารถติดต่อสอบถามฝ่ายบริการลูกค้า ให้ช่วยคุณแก้ตำแหน่งปลายทาง สามารถโทรติดต่อ Call Center 1436  หรือ ติดต่อสอบถามผ่าน inbox เพจเฟสบุ๊ค 

เราขอแนะนำให้คุณตรวจสอบข้อมูลพัสดุของคุณในทุกๆด้านให้ถูกต้องครบถ้วนก่อนกดบุ๊คกิ้ง เพื่อป้องกันปัญหาที่อาจเกิดขึ้นในการจัดส่ง</span></p>
</div></center>
TH
 <footer class="container-fluid bg-light-blue p2">
        <div class="center">
            <p class="black">2018- 2024 TrackingS. All rights reserved.</p>
        </div>
    </footer>