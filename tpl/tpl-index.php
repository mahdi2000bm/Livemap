<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/public.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/map.css">
    <title><?= SITETITLE ?></title>
</head>

<body>  
        <div class="wrapper">
            <header>
                <nav>
                    <div class="serachlive">
                        <a id="serachlive-btn" class="serachlive-btn" href="">
                            <span class="icon-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M507.3 484.7l-141.5-141.5C397 306.8 415.1 259.7 415.1 208c0-114.9-93.13-208-208-208S-.0002 93.13-.0002 208S93.12 416 207.1 416c51.68 0 98.85-18.96 135.2-50.15l141.5 141.5C487.8 510.4 491.9 512 496 512s8.188-1.562 11.31-4.688C513.6 501.1 513.6 490.9 507.3 484.7zM208 384C110.1 384 32 305 32 208S110.1 32 208 32S384 110.1 384 208S305 384 208 384z" />
                                </svg>
                            </span>
                        </a>
                        <input id="livesearch" class="livesearch" placeholder="دنبال کجا میگردی؟" type="text">
                    </div>
                </nav>
                <div id="accordian">
                    <ul class="show-dropdown main-navbar">
                        <div class="selector-active">
                            <div class="top"></div>
                            <div class="bottom"></div>
                        </div>
                        <li class="active">
                            <a href="javascript:void(0);">
                                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M565.6 36.24C572.1 40.72 576 48.11 576 56V392C576 401.1 569.8 410.9 560.5 414.4L392.5 478.4C387.4 480.4 381.7 480.5 376.4 478.8L192.5 417.5L32.54 478.4C25.17 481.2 16.88 480.2 10.38 475.8C3.882 471.3 0 463.9 0 456V120C0 110 6.15 101.1 15.46 97.57L183.5 33.57C188.6 31.6 194.3 31.48 199.6 33.23L383.5 94.52L543.5 33.57C550.8 30.76 559.1 31.76 565.6 36.24H565.6zM48 421.2L168 375.5V90.83L48 136.5V421.2zM360 137.3L216 89.3V374.7L360 422.7V137.3zM408 421.2L528 375.5V90.83L408 136.5V421.2z" />
                                    </svg></i>نقشه
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z" />
                                    </svg></i>آدرس های منتخب
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="height-min"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M336 0h-288C21.49 0 0 21.49 0 48v431.9c0 24.7 26.79 40.08 48.12 27.64L192 423.6l143.9 83.93C357.2 519.1 384 504.6 384 479.9V48C384 21.49 362.5 0 336 0zM336 452L192 368l-144 84V54C48 50.63 50.63 48 53.1 48h276C333.4 48 336 50.63 336 54V452z" />
                                    </svg></i>ورود به پنل
                            </a>
                        </li>
                        <li> 
                            <a href="javascript:void(0);"><i class="height-min"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 384 512">
                                        <path
                                            d="M112 152C112 138.7 122.7 128 136 128C149.3 128 160 138.7 160 152C160 165.3 149.3 176 136 176C122.7 176 112 165.3 112 152zM272 152C272 165.3 261.3 176 248 176C234.7 176 224 165.3 224 152C224 138.7 234.7 128 248 128C261.3 128 272 138.7 272 152zM192 252C217.7 252 234.9 235.6 239.4 228.9C245.5 219.7 257.9 217.2 267.1 223.4C276.3 229.5 278.8 241.9 272.6 251.1C262.9 265.7 234.5 292 192 292C149.5 292 121.1 265.7 111.4 251.1C105.2 241.9 107.7 229.5 116.9 223.4C126.1 217.2 138.5 219.7 144.6 228.9C149.1 235.6 166.3 252 192 252V252zM384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192H384zM192 48C112.5 48 48 112.5 48 192C48 204.4 52.49 223.6 63.3 249.2C73.78 274 88.66 301.4 105.8 329.1C134.2 375.3 167.2 419.1 192 451.7C216.8 419.1 249.8 375.3 278.2 329.1C295.3 301.4 310.2 274 320.7 249.2C331.5 223.6 336 204.4 336 192C336 112.5 271.5 48 192 48V48z" />
                                    </svg></i>مکان های پیشنهادی
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
        </div>
    <section id="map-tilelayer">
        <div id="modal-location" class="modal">
            <form action="POST" id="data-record" class="modal-form">
                <div class="coordinates"><span>طول جغرافیایی</span> : <span id="lngLoc">Long</span></div>
                <div class="coordinates"><span>عرض جغرافیایی</span> : <span id="latLoc">Lat</span></div>
                <input id="bussinessId" placeholder="نام کسب‌وکار شما" type="text">
                <select id="type-location">
                    <option value="">نوع کسب‌وکار خود را انتخاب کنید</option>
                    <?php foreach ($locationTypes as $key => $value) : ?>
                           <option value="<?=$key?>"><?=$value?></option>
                    <?php endforeach;?>
                </select>

                <input type="submit" value="ثبت مکان">
            </form>
        </div>
    </section>
    
    <script src='<?= BASEURL ?>/assets/js/jquery.js'></script>
    <script src="<?= BASEURL ?>/assets/js/map.js"></script>
    <script src="<?= BASEURL ?>/assets/js/public.js"></script>
</body>

</html>