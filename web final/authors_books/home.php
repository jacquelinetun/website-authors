<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors' Novels</title> 
    <!--font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- css link -->

    <link rel="stylesheet" href="home.css">

</head>
<body>
 
<!-- header session -->

<header class="header">
    
    <div id="menu-btn" class="fas fa-bars"></div>

     <a href="#home" class="logo">Rhym & Shan Nari</a> 

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#completed">completed</a>
        <a href="#ongoing">ongoing</a>
        <a href="#comingsoon">coming soon</a>
        <a href="#about" class="active">about</a>
        <a href="login.php">login</a>
        <a href="logout.php">logout</a>
    </nav>

    <div class="follow">
        <!--<a href="https://www.wattpad.com/user/rhym_m" class="fas fa-book-open"></a>   -->
        <a href="https://www.wattpad.com/user/rhym_m">
            <iconify-icon icon="simple-icons:wattpad"></iconify-icon>
        </a>  
    
    </div>

</header>

<!-- home section -->

<section class="home" id="home">
    <div class="image">
        <img src="images/SecretCover.jpg" alt="">
    </div>

    <div class="content">
        <h3>Secret</h3>
        <span>written by rhym</span>
        <p>There was a secret behind the accident. What was it? </p>

        <a href="#ongoing" class="btn">explore more</a>
    </div>

    <div class="image">
        <img src="images/RememberMeCover.png" alt="">
    </div>

    <div class="content">
        <h3>မှတ်မိနေပေးပါ</h3>
        <span>written by rhym</span>
        <p>"ကမ္ဘာကြီးပြောင်းလဲသွားခဲ့ရင် ဒါမှမဟုတ် ရှင် ပြောင်းလဲသွားခဲ့ရင်တောင် ကျွန်မကို မှတ်မိနေမှာလား - ယွန်းငယ်" </p>
        <p> "မင်းရဲ့ဖြစ်တည်မှုကို မေ့သွားခဲ့ရင်တောင် မင်းအချစ်တွေကိုတော့ ထာဝရ မှတ်မိနေမှာပါ - မင်းနောင်" </p>

        <a href="#completed" class="btn">explore more</a>
    </div>

    <div class="image">
        <img src="images/DHBLCover.png" alt="">
    </div>

    <div class="content">
        <h3>does hate burn love?</h3>
        <span>written by shan nari</span>
        <p>ကျွန်တော့်အတွက်တော့ သူ့အမုန်းတွေဟာ ကျွန်တော့်ကို လောင်မြိုက်စေပေမဲ့ ကျွန်တော် သူ့ကိုမြတ်နိုးတယ်။ တွယ်တာတယ်။ ချစ်ခင်တယ်။ ဒါကို သူသိသွားပါ့မလား။ </p>

        <a href="#completed" class="btn">explore more</a>
    </div>


</section>


<!-- completed section -->
<section class="completed" id="completed">
    <h1 class="heading"><span>completed novels</span></h1>
    <div class="box-container">
                <div class="image">
                    <img class="image__img" src="images\RememberMeCover.png" alt="Remember">
                    <div class="image__overlay image__overlay--blur">
                        <a href="remember.php" class=text>Read Trailer</a>
                    </div>
                </div>
                <div class="image">
                    <img class="image__img" src="images\DHBLCover.png" alt="Hate">
                    <div class="image__overlay image__overlay--blur">
                        <a href="hate.php" class=text>Read Trailer</a>
                    </div>
                </div>  
                <div class="image">
                    <img class="image__img" src="images\GGADcover.jpg" alt="GGAD">
                    <div class="image__overlay image__overlay--blur">
                        <a href="ggad.php" class=text>Read Trailer</a>
                    </div>
                </div>               
    </div>
</section> 

<!-- ongoing -->

<section class="ongoing" id="ongoing">
    <h1 class="heading"><span>ongoing novels</span></h1>
    <div class="box-container">
                <div class="image">
                    <img class="image__img" src="images\SecretCover.jpg" alt="Secret">
                    <div class="image__overlay image__overlay--blur">
                        <a href="secret.php" class=text>Read Trailer</a>
                    </div>

                </div>
    
                <div class="image">
                    <img class="image__img" src="images\LoveCover.jpg" alt="Love">
                    <div class="image__overlay image__overlay--blur">
                        <a href="rain.php" class=text>Read Trailer</a>
                    </div>
                </div>

                <div class="image">
                    <img class="image__img" src="images\PannPitoutCover.jpg" alt="Flower">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">Ongoing</div>
                    </div>
                </div>
    </div>
</section> 

<!-- comingsoon books -->

<section class="comingsoon" id="comingsoon">
    <h1 class="heading"><span>coming soon novels</span></h1>
    <div class="box-container">

                <div class="image">
                    <img class="image__img" src="images\SOWcover.jpg" alt="SOW">
                    <div class="image__overlay image__overlay--blur">
                        <div class="image__title">Coming Soon</div>
                    </div>

                </div>
    
        <div class="image">
            <img class="image__img" src="images\Cigarettecover.jpg" alt="Cigarette">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Coming Soon</div>
            </div>
        </div>

        <div class="image">
            <img class="image__img" src="images\Coffeecover.jpg" alt="Coffee">
            <div class="image__overlay image__overlay--blur">
                <div class="image__title">Coming Soon</div>
            </div>
        </div>
    </div>
</section> 

<!-- about section -->
<section class="about" id="about">


    <div class="bio">

        <h1 class="heading"><span>about authors</span></h1>

        <div class="row">            
            <div class="box-container">
                <h3 class="title">rhym</h3>

                <div class="box">                   
                    <p>rhym was born and raised in yangon, 2001. he wrote a bunch of stories when he was 11. he continued writing novels like romance, action, thriller, mystery and etc.</p>
                </div>   
            </div>

            <div class="box-container">
                <h3 class="title">shan nari</h3>

                <div class="box">                 
                    <p>shan nari was also born and raised in yangon, 2001. she has been written bl novels since 2018. she continued writing age gap and boy love novels.</p>
                </div>   
            </div>
        </div>
       
    </div>

</section>

<div class="credit">&copy;copyright @<?php echo date('Y'); ?> by <span>rhym & shan nari </div>

<!-- js file link -->
<script src="script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>