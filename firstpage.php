<?php 
    session_start();
    include('server.php'); 
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }

    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
    if (isset($_GET['back_buy'])){
        unset($_SESSION['buy']);
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amulet thailand official</title>
    <link rel="stylesheet" href="main.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="image/logo.png">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header1">
                <a href="firstpage.php"><img src="image/logoindex.png" alt=""></a>
                <ul class="topright">
                    <li class="l2"><a href="cart.php">ตะกร้าสินค้า</a></li>
                    <li>|</li>
                    <li class="l3"><a href="firstpage.php?logout=<?php echo $_SESSION['username']; ?>">Logout</a></li>
                    <li>|</li>
                    <li class="l4">Logged in : <span><?php echo $_SESSION['username']; ?></span></li>
                </ul>
            </div>
            <div class="header2">
                <img src="image/header.gif" alt="">
            </div>
            <ul class="menu">
                <li class="m1"><a href="#howtobuy">วิธีเช่าบูชา</a></li>
                <li>|</li>
                <li class="m2"><a href="#shop">เลือกซื้อ</a></li>
                <li>|</li>
                <li class="m3"><a href="about.php#about">About</a></li>
                <li>|</li>
                <li class="m3"><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="body">
            <div class="introduce">
                <div class="wallpaper">
                    <marquee behavior="" direction="right">🙏👋Welcome!😁💰</marquee>
                    <marquee behavior="" direction="left">😎✌️Have a nice day🤗🙏</marquee>
                    <div class="text">
                    <h3>สวัสดีครับ <span id="type"></span></h3>
                    <p>เว็บไซต์ของเราคือเว็บไซต์ที่จะปล่อยให้เช่าบูชาวัตถุมงคลของพระเกจิอาจารย์ชื่อดังหรือเป็นที่รู้จักในไทยครับพวกเราขอขอบคุณที่แวะมาเยี่ยมชมเว็บไซต์ของเราขอให้เจอสิ่งที่ท่านตามหาและหากมีข้อผิดพลาดประการใดขออภัยมา ณ ที่นี้ด้วยนะครับ</p>
                    </div>
                </div>
            </div>
            <div class="popular">
                <div class="title">
                    ยอดนิยม!(Popular)
                </div>
                <div class="animation">💰😍</div>
                <div class="animation2">🙏🤩</div>
                <div class="content">
                    <div class="picture">
                        <img src="image/list/a01.png" alt="" id="c_pic">
                        <p>หลวงพ่อรวย ปาสาทิโก<br>รุ่น เลื่อนสมณศักดิ์<br><button class="c1"
                                onclick="window.location.href='a01.php'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/a02.png" alt="" id="c_pic2">
                        <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น สร้างบารมี<br><button class="c2"
                                onclick="window.location.href='a02.php'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/a03.png" alt="" id="c_pic3">
                        <p>หลวงปู่โต๊ะ อินทสุวัณโณ<br>รุ่น ปิดตาจัมโบ้ 2<br><button class="c3"
                                onclick="window.location.href='a03.php'">View!</button></p>
                    </div>
                    <div class="picture">
                        <img src="image/list/a04.png" alt="" id="c_pic4">
                        <p>หลวงพ่อพัฒน์ ปุญญกาโม<br>รุ่น แรก<br><button class="c4"
                                onclick="window.location.href='a04.php'">View!</button></p>
                    </div>
                </div>
            </div>
            <div id="howtobuy"></div>
            <div class="howtobuy">
                <div class="content">
                    <div class="howtitle">วิธีการสั่งซื้อ(How to buy)</div>
                </div>
                <div class="animation">🤔❓</div>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yDzCh_ZsAjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8kgjncmmTbc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div id="shop"></div>
        <div class="shop">
            <div class="topic">
                เลือกซื้อ(Shop)
            </div>
                    
                <form action="search.php" method="get">
                <input type="text" placeholder="Search"  name="search_name" required>
                <input type="submit" name="search_btn" value="Enter">
                </form>

            <div class="content">
                <div class="picture">
                    <img src="image/list/a05.png" alt="" id="c_pic5">
                    <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น นั่งพานชนะมาร<br><button class="c1"
                            onclick="window.location.href='a05.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a06.png" alt="" id="c_pic6">
                    <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น พิเศษ<br><button class="c1"
                            onclick="window.location.href='a06.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a07.png" alt="" id="c_pic7">
                    <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น เจริญพรบน<br><button class="c1"
                            onclick="window.location.href='a07.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a08.png" alt="" id="c_pic8">
                    <p>หลวงพ่อคูณ ปริสุทโธ<br>รุ่น เพชรน้ำเอก<br><button class="c1"
                            onclick="window.location.href='a08.php'">View!</button></p>
                </div>
            </div>
            <div class="content">
                <div class="picture">
                    <img src="image/list/a09.png" alt="" id="c_pic9">
                    <p>หลวงพ่อวัดไร่ขิง<br>รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย<br><button class="c1"
                            onclick="window.location.href='a09.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a10.png" alt="" id="c_pic10">
                    <p>หลวงพ่อวัดไร่ขิง<br>รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย<br><button class="c1"
                            onclick="window.location.href='a10.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a11.png" alt="" id="c_pic11">
                    <p>หลวงพ่อวัดไร่ขิง<br>รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย<br><button class="c1"
                            onclick="window.location.href='a11.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a12.png" alt="" id="c_pic12">
                    <p>หลวงพ่อวัดไร่ขิง<br>รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย<br><button class="c1"
                            onclick="window.location.href='a12.php'">View!</button></p>
                </div>
            </div>
            <div class="content">
                <div class="picture">
                    <img src="image/list/a13.png" alt="" id="c_pic13">
                    <p>หลวงปู่โต๊ะ อินทสุวัณโณ<br>รุ่น ปิดตากนกข้าง<br><button class="c1"
                            onclick="window.location.href='a13.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a14.png" alt="" id="c_pic14">
                    <p>หลวงปู่โต๊ะ อินทสุวัณโณ<br>รุ่น ปิดตาหลังเต่า<br><button class="c1"
                            onclick="window.location.href='a14.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a15.png" alt="" id="c_pic15">
                    <p>หลวงปู่โต๊ะ อินทสุวัณโณ<br>รุ่น ปิดตาปลดหนี้หลังยันต์ตรี<br><button class="c1"
                            onclick="window.location.href='a15.php'">View!</button></p>
                </div>
                <div class="picture">
                    <img src="image/list/a16.png" alt="" id="c_pic16">
                    <p>หลวงปู่โต๊ะ อินทสุวัณโณ<br>รุ่น ปิดตาหลังยันต์นะทะนะ<br><button class="c1"
                            onclick="window.location.href='a16.php'">View!</button></p>
                </div>
            </div>
        </div>
        <div class="change">
            <ul style="width: 15rem;">
                <li class="l1"><button>1</button></li>
                <li class="l2"><button onclick="window.location.href='pagetwo.php'">2</button></li>
                <li class="l3"><button onclick="window.location.href='pagethree.php'">3</button></li>
                <li class="l3"><button onclick="window.location.href='pagefour.php'">4</button></li>
                <li class="l4"><button onclick="window.location.href='pagetwo.php'">></button></li>
            </ul>
        </div>
        <div class="footer">
            <audio class="audio1" src="music/music.mp3" controls loop></audio>
            <div class="headerfooter">ติดต่อสอบถาม</div>
            <div class="contentfooter">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Gmail_Icon_%282013-2020%29.svg/2048px-Gmail_Icon_%282013-2020%29.svg.png" alt="">
                <p>: worawutavc@gmail.com</p>
                <img class="line" src="https://www.rinnotech.co.th/images/editor/LINE_logo.svg_1.png" alt="">
                <p>: worawutavc</p>
                <img src="https://i.pinimg.com/originals/7a/09/e3/7a09e3d2a15875ceb52e6eac215bd73b.png" alt="">
                <p>: 0927255199</p>
            </div>
            <p id="contact">&copy; Amulet thailand official 2021 All Rights Reserved.</p>
            <div class="maybeyouwant">
            สิ่งที่คุณอาจจะสนใจ...<a href="visit/maybe.html">ClickMe</a>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
            document.getElementById('c_pic').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic2').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic3').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic4').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic5').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic6').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic7').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic8').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic9').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic10').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic11').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic12').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic13').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic14').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic15').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            document.getElementById('c_pic16').addEventListener('click', function(){
                Swal.fire(
                'คลิก View!',
                'คลิก View! เพื่อดูรายละเอียดเพิ่มเติม', 
                'warning'
                )   
            })
            var typed = new Typed('#type', {
            // Waits 1000ms after typing "First"
            strings: ['เว็บไซต์ Amulet thailand official ยินดีต้อนรับ','Worawut Yachaiya ยินดีต้อนรับ', 'Aphinya Charoenphon ยินดีต้อนรับ'],smartBackspace: true,loop: true,typeSpeed: 20,backSpeed:20,
});
        </script>
</body>
</html>