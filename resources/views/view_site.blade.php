<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="7"/>
    <title>انجام بازدیدها</title>

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top violet fore-white shadow">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="loginPlace" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="avt dropdown main-item" data-toggle="dropdown" role="button"
                       area-haspopup="true" aria-expanded="false"
                       href="/Manage">
                        <img alt="avatar" class="img-circle" src="/content/img/profile/avatar40.jpg"/>
                        <sup class="badge user-credit" title="میزان اعتبار">1K IRT</sup>
                        <span>حمید</span>
                        <i class="fa fa-angle-down go-left"></i>
                    </a>
                    <ul class="dropdown-menu rtl-submenu">

                        <li>
                            <a href="/account/panel">پنل کاربری من</a>
                        </li>
                        <li class="divider no-border"></li>
                        <li class="no-border"><a href="/Account/LogOff">خروج</a></li>

                    </ul>
                </li>
                <li><a href="/blog">وبلاگ</a></li>
            </ul>


        </div>
    </div>
</div>


<style>
    #fullUrl {
        direction: ltr;
        display: none;
    }

    #eframe24 {
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        position: absolute;
        overflow: hidden;
    }

    #progressTimer {
        width: 200px;
        display: inline-block;
    }

    .progress {
        height: 4px;
        margin: 0;
    }

    .menu-right {
        margin-left: 0;
        margin-right: auto;
    }

    .stats {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .stat-pnl {
        flex: 1;
        min-width: 250px;
        background-color: #dcf8ed;
        margin: 10px;
        text-align: center;
        padding: 25px;
    }

    .stat-pnl h4 {
        color: #888;
    }

    .stat-pnl table {
        width: 100%;
    }

    .stat-pnl tr {
        color: #666;
        text-align: right;
        font-size: 1.2em;
        font-weight: bolder;
    }

    .stat-pnl td:nth-child(2n) {
        color: #222;
        width: 30%;
    }

    .stat-pnl td:nth-child(2n+1) {
        /*display: inline-block;*/
        display: block;
        text-align: left;
        padding-left: 50%;
    }


    /*data node*/
    .node {
        min-height: 100px;
        padding: 5px !important;
        text-align: center;
    }

    .node div {
        padding: 5px;
    }

    .node h2 {
        text-align: center;
        color: #222;
        direction: ltr;
    }

    .node h2 span {
        display: inline-block;
        font-size: 0.7em;
        color: #2d84ae;
        padding-left: 2px;
    }

    .middle {
        display: block;
        margin-top: 0 !important;
    }

    .under {
        margin-top: 30px;
        display: block;
        direction: rtl;
    }

    .sm-unit {
        font-size: 0.8em;
        padding-left: 1px;
    }

    .node p {
        color: #444;
        text-align: right;
    }


    .bk {
        background-color: #b4ebf2;
        color: #444;
    }

    .panel {
        background-color: #008fbb;
        color: #443b17;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        color: rgba(255, 246, 209, 0.8);
    }

    .panel .row {
        padding-top: 0;
    }

    .panel-desc {
        width: 100%;
        text-align: center;
        color: white;
    }

    .btn-gn {
        display: inline-block;
        margin-top: 15px;
        background-color: hsl(201, 100%, 30%) !important;
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#23e034", endColorstr="#28bf50");
        background-image: -moz-linear-gradient(top, #23e034, #28bf50);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #23e034), color-stop(100%, #28bf50));
        background-image: -webkit-linear-gradient(top, #23e034, #28bf50);
        background-image: -o-linear-gradient(top, #23e034, #28bf50);
        background-image: linear-gradient(#23e034, #28bf50);
        border-color: #28bf50 #28bf50 hsl(201, 100%, 25%);
        color: #fff !important;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
        -webkit-font-smoothing: antialiased;
        font-size: 1.2em;
    }

    .btn-gn:hover {
        background-color: hsl(201, 100%, 17%) !important;
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#05a7ff", endColorstr="#003856");
        background-image: -moz-linear-gradient(top, #05a7ff, #003856);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #05a7ff), color-stop(100%, #003856));
        background-image: -webkit-linear-gradient(top, #05a7ff, #003856);
        background-image: -o-linear-gradient(top, #05a7ff, #003856);
        background-image: linear-gradient(#05a7ff, #003856);
        border-color: #003856 #003856 hsl(201, 100%, 8.5%);
        color: #fff !important;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.56);
        -webkit-font-smoothing: antialiased;
    }

    #btnPrev {
        display: inline-block;
        margin-top: 15px;
        background-color: hsl(201, 100%, 17%) !important;
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#05a7ff", endColorstr="#003856");
        background-image: -moz-linear-gradient(top, #05a7ff, #003856);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #05a7ff), color-stop(100%, #003856));
        background-image: -webkit-linear-gradient(top, #05a7ff, #003856);
        background-image: -o-linear-gradient(top, #05a7ff, #003856);
        background-image: linear-gradient(#05a7ff, #003856);
        border-color: #003856 #003856 hsl(201, 100%, 8.5%);
        color: #fff !important;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.56);
        -webkit-font-smoothing: antialiased;
        font-size: 1.2em;
    }

    .orange {
        color: #ffed00;
        text-shadow: 2px 2px #333;
    }

    .special {
        min-height: 440px;
        color: rgba(255, 246, 209, 0.95);
    }

    #p1:hover {
        color: #000;
    }

    .btn-varsize {
        display: inline-block;
        color: black;
    }

    .btn-invite {
        background-color: hsl(184, 63%, 41%) !important;
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff9c00", endColorstr="#d26100");
        background-image: -moz-linear-gradient(top, #ff9c00, #d26100);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ff9c00), color-stop(100%, #26a1aa));
        background-image: -webkit-linear-gradient(top, #ff9c00, #d26100);
        background-image: -o-linear-gradient(top, #ff9c00, #d26100);
        background-image: linear-gradient(#ff9c00, #d26100);
        border-color: #26a1aa #26a1aa hsl(184, 63%, 34.5%);
        color: #333 !important;
        text-shadow: 0 1px 1px rgba(255, 255, 255, 0.42);
        -webkit-font-smoothing: antialiased;
        height: 40px;
        margin-top: 15px !important;
    }

    .colored {
        color: #434;
    }

    .banner {
        background-color: #008fbb;
        margin-top: 20px;
        margin-bottom: 0;
        padding: 0;
        box-shadow: 15px 10px 10px rgba(10, 10, 10, 0.32);
    }

    #url1 {
        color: #bbb;
    }

    .yel {
        color: #f9ff00;
        text-shadow: 1px 1px #333;
    }

    .seen {
        background-color: rgba(10, 10, 10, 0.52);
        border-radius: 5px;
        padding: 4px 5px 3px;
        color: #fff;
        font-weight: 100;
        position: absolute;
        left: 10px;
        top: 0px;
        margin-bottom: 2px;
        font-family: Tahoma !important;
    }

    #curstat {
        background-color: rgba(10, 10, 10, 0.52);
        border-radius: 5px;
        padding: 4px 5px 3px;
        color: #fff;
        font-weight: 100;
        position: relative;
        padding-bottom: 6px;
        display: inline-block;
        font-family: Tahoma !important;
    }

    .bull {
        color: #04a80c !important;
    }

    .bear {
        color: #d90453 !important;
    }

    #latestVisits table {
        color: black;
        text-align: center;
    }

    #latestVisits table th {
        background-color: #83bdff !important;
        text-align: center !important;
    }

    #latestVisits tr:nth-child(odd) > td {
        background-color: #dfeff6;
    }

    #latestVisits tr:nth-child(even) > td {
        background-color: #f3f3f3;
    }

    .over {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        position: relative;
        text-align: center;
        overflow: hidden;
    }

    .form__answer {
        display: inline-block;
        box-sizing: border-box;
        width: 23%;
        margin: 2px 1% 2px 0;
        vertical-align: top;
        font-size: 1.2em;
        text-align: center;
    }

    label {
        border: 1px solid rgba(10, 10, 10, .15);
        box-sizing: border-box;
        display: block;
        height: 100%;
        width: 100%;
        cursor: pointer;
        opacity: .5;
        transition: all .5s ease-in-out;
        padding: 5px;
    }

    .form__button {
        height: 40px;
        border: none;
        background-color: #003856;
        color: white;
        text-transform: uppercase;
        padding: 0 20px;
        border-radius: 20px;
        font-weight: 900;
        cursor: pointer;
        margin: 20px 0;
        transition: all .25s ease-in-out;
    }

    .form__button :hover, :focus {
        background-color: #333;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, .25);
        outline: none;
    }


    /* Input style */

    input[type="radio"] {
        display: none;
        opacity: 0;
        width: 0;
        height: 0;
    }

    input[type="radio"]:active ~ label {
        opacity: 1;
    }

    input[type="radio"]:checked ~ label {
        opacity: 1;
        border: 1px solid #fff;
    }
</style>
<input name="__RequestVerificationToken" type="hidden"
       value="0u-fItKLbxjsMlwyAdDIAhatpZn9fAgRRy_MkKySNesyE-ecOOhXzZQdVJR3TqkTtWI06cvRWslW1-uS006bT1gHSvxJ0wzxagBRhiwaq0I1"/>
<div class="container body-content">
    <input id="Token" name="Token" type="hidden" value=""/>
    <input id="WebsiteToVisitRA" name="WebsiteToVisitRA" type="hidden" value=""/>
    <input id="YourSiteRA" name="YourSiteRA" type="hidden" value="1473368481233237"/>
    <div id="banner" class="col-xs-12 col-md-8 col-md-offset-2 banner hidden">
        <a id="bannerLink" href="" target="_blank"><img id="bannerimage" alt="banner" class="img-responsive"
                                                        src="/content/promo/28771534657887167342_l2wdwwujfsh5jhrr.jpeg"/></a>
        <h5 id="showns" class="seen"></h5>
    </div>
    <div id="cover" class="col-xs-12 col-md-8 col-md-offset-2 panel">
        <iframe id="eframe24" sandbox="allow-forms allow-same-origin allow-scripts" name="myframe24"></iframe>
        <div class="dark"></div>
        <div class="over">
            <h3 id="urlheader" class="fc"></h3>
            <h4 id="url1" dir="ltr" class="panel-desc"></h4>
            <a id="url" href="#" target="_blank"><h3 dir="ltr" class="panel-desc yel"></h3></a>
            <div id="progressTimer"></div>
            <br/>
            <h5 id="curstat"></h5>
            <h5 id="nextgift"></h5>
            <div id="p1" class="panel-desc"></div>

        </div>
        <h5 id="seenCount" class="seen"></h5>
    </div>
    <div class="col-xs-12 col-md-8 col-md-offset-2 panel">
        <div id="makeSpec" class="fc">
            <button type="button" class="btn btn-block btn-varsize btn-invite btn-warning"
                    onclick="window.open('/promotesite/1473368481233237','_blank')">
                <i class='fa fa-star'> </i>خرید یا تمدید خدمات
            </button>
            <h4 class="fc">سایت شما <span id="yourHost"></span> <i id="yourHosti" class="fa fa-info-circle"></i> آی پی:
                <span id="yourIp"></span></h4>
            <p id="fullUrl"></p>
        </div>
        <div class="row">
            <div class="node col-xs-6 col-md-3">
                <div class="bk">
                    <p>بازدید شده اید</p>
                    <h2 id="visitedCount"></h2>
                    <span class="middle" id="youWereVisitedCount"></span>
                    <span class="under" id="youWereVisitedTodaySeconds"></span>
                </div>
            </div>
            <div class="node col-xs-6 col-md-3">
                <div class="bk">
                    <p>بازدید کرده اید</p>
                    <h2 id="youvisited"></h2>
                    <span class="middle" id="youVisitedCount"></span>
                    <span class="under" id="youVisitedTodaySeconds"></span>
                </div>
            </div>
            <div class="node col-xs-6 col-md-3">
                <div class="bk">
                    <p>خرید و هدایا</p>
                    <h2 id="bought"></h2>
                    <span class="middle" id="gifts"></span>
                    <span class="under" id="gift-today"></span>
                </div>
            </div>
            <div class="node col-xs-6 col-md-3">
                <div class="bk">
                    <p>مطالبات</p>
                    <h2 id="reminder"></h2>
                    <span class="middle" id="reminderCount"></span>
                    <span class="under" id="reminderToday"></span>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-md-8 col-md-offset-2 panel">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <button class="btn btn-gn fc" onclick="settings();"><i class='fa fa-cog'> </i> تنظیمات</button>
            </div>
            <div class="col-xs-6 col-md-3">
                <button id="btnReport" class="btn btn-gn fc" onclick="report();"><i class='fa fa-file-text'> </i> گزارش
                    بازدیدها
                </button>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="dropdown">
                    <button class="btn btn-gn dropdown-toggle fc" data-toggle="dropdown">
                        <i class='fa fa-industry'> </i> امکانات
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu menu-right">
                        <li><a href="javascript:void(0)" onclick="preview();"> <i class="fa fa-eye"></i> سایت من از نگاه
                                دیگران</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <button class="btn btn-gn fc"><i class='fa fa-comment'> </i> پیام ها</button>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-8 col-md-offset-2 panel">
        <form>
            <fieldset class="form__options">
                <p class="form__answer">
                    <input id="match_1" type="radio" name="match" class="period" value="d" checked>
                    <label for="match_1">
                        امروز
                    </label>
                </p>

                <p class="form__answer">
                    <input id="match_2" type="radio" name="match" class="period" value="w">
                    <label for="match_2">
                        این هفته
                    </label>
                </p>

                <p class="form__answer">
                    <input id="match_3" type="radio" name="match" class="period" value="m">
                    <label for="match_3">
                        این ماه
                    </label>
                </p>

                <p class="form__answer">
                    <input id="match_4" type="radio" name="match" class="period" value="y">
                    <label for="match_4">
                        امسال
                    </label>
                </p>

            </fieldset>
        </form>
        <div class="stats">
            <div class="stat-pnl">
                <h4>بازدیدهای شما از دیگران</h4><br/>
                <table>
                    <tr>
                        <td>تعداد</td>
                        <td id="v-count"></td>
                    </tr>
                    <tr>
                        <td>+ زمان</td>
                        <td id="v-time"></td>
                    </tr>
                    <tr>
                        <td>متوسط زمان</td>
                        <td id="v-avg"></td>
                    </tr>
                    <tr>
                        <td>+ بارگذاری</td>
                        <td id="v-load"></td>
                    </tr>
                    <tr>
                        <td>+ هدیه</td>
                        <td id="v-gift"></td>
                    </tr>
                </table>
            </div>
            <div class="stat-pnl">
                <h4>بازدیدهای دیگران از شما</h4><br/>
                <table>
                    <tr>
                        <td>تعداد</td>
                        <td id="w-count"></td>
                    </tr>
                    <tr>
                        <td>- زمان</td>
                        <td id="w-time"></td>
                    </tr>
                    <tr>
                        <td>متوسط زمان</td>
                        <td id="w-avg"></td>
                    </tr>
                    <tr>
                        <td>- بارگذاری</td>
                        <td id="w-load"></td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="panel-desc">شرایط قابل بازدید بودن سایت ها توسط شما : <br/>می بایست تقاضای افزایش بازدید کرده باشند و
            حداقل یک بازدید طلبکار باشند<br/>در دوازده ساعت گذشته توسط آی پی شما بازدید نشده باشند</p>
    </div>


    <div id="latestVisits" class="col-xs-12 col-md-8 col-md-offset-2 panel">
        <h4 class="fc">پنج بازدید آخر از سایت شما</h4>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>موفق</th>
                <th>زمان بازدید</th>
                <th>مدت</th>
                <th class="hidden-xs">آی پی و مشخصات بازدید کننده</th>
            </tr>
            </thead>
            <tbody id="newestSection"></tbody>
        </table>
    </div>

    <br/>
    <br/>
</div>


<footer class="footer-space">
    <div class="narrow-bar violet"></div>
    <div class="row full-width">

        <div class="col-sm-4 col-xs-6 footer-invite text-center">
            <a href="http://exchange24.ir">
                <img alt="logo" src="/Content/img/logo.png" class="footer-logo img-responsive"/>
            </a>
        </div>

        <div class="footer-invite hidden-xs col-xs-6 col-sm-4">

        </div>

        <div class="footer-invite col-xs-6 col-sm-4">
            <ul>
                <li class="social-icons">
                    <a target="_blank" href="https://www.instagram.com/exchange24/">
                                <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x"></i>
                                </span>
                        <p>پیج اینستاگرام</p>
                    </a>
                </li>
                <li class="social-icons">
                    <a target="_blank" href="https://t.me/codefx">
                                <span class="fa fa-stack fa-2x">
                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                    <i class="fa fa-telegram fa-stack-1x"></i>
                                </span>
                        <p>تلگرام ادمین</p>
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <div class="row full-width">

        <div class="footer-invite col-xs-12">
            <div class="row">
                <div class="col-xs-6">
                    <script src="https://www.zarinpal.com/webservice/TrustCode"></script>
                    <p>ضمانت پرداخت توسط زرین پال</p>
                </div>
                <div class="col-xs-6">
                    <a target="_blank" href="http://icip.ito.gov.ir/index.php/site/page/view/list_ip">
                        <img class="in-block img-responsive" alt="سازمان فناوری اطلاعات"
                             src="/Content/img/fanavari.png"/>
                        <p>تعرفه نیم بها از سازمان فناوری اطلاعات ایران</p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row full-width">

        <div class="col-xs-12 footer-copyright">
            <p>&copy; Exchange24 </p>
            <p><i class="fa fa-info-circle"></i> لطفا هر نوع پیشنهاد،مشکل و باگ را با آی دی تلگرام یا اینستاگرام ذکر شده
                در بخش شبکه های اجتماعی در میان بگذارید</p>

        </div>
    </div>
    <div class="row full-width">
        <div class="col-xs-12 footer-menu">
            <a target="_blank" href="/faq">سوالات متداول</a> <a target="_blank" href="/Legal">قوانین</a> <a
                target="_blank" href="/devlog">لاگ تغییرات</a>
        </div>
    </div>
    <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="alertHeader"></h4>
                </div>
                <div class="modal-body">
                    <h3 id="alertMessage" class="text-center"></h3>
                </div>
                <div class="modal-footer">
                    <button id="alertButton" class="btn btn-large btn-primary" data-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>

</footer>

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script>
    var interval = 40000;

    function refreshv() {
        clearInterval(exec);
        var model = {
            Token: $('#Token').val(), WebsiteToVisitRA: $('#WebsiteToVisitRA').val(),
            YourSiteRA: $('#YourSiteRA').val(),
            Stat_VPeriod: '',
            Stat_WPeriod: $(".period:checked").val()
        };
        $.ajax({
            url: "/api/visit",
            type: "POST",
            dataType: 'json',
            contentType: "application/json",
            data: JSON.stringify(model),
            headers: {
                'RequestVerificationToken': '8gpJI5wBkn9MEsjfkaNYJfy_OLaoYxlYtJv3WwgXr0q_uR8BjXHp4Uz3jLYDP6_3mC45s7tey7k03-PxVrSxhTuEemYSgRLmr4vnOEtVEU01:t1V1_LKHSL7WpKJfT40bgmcdUXtoGbz4TQKwayWNfT6qKroa5ut_6HAsbt1YUXY99f2b1S0Fzjluy6CX-LNUkchh4WBvrYBOdRzm_bgc14Q1'
            },
            success: function (results) {
            },
            complete: function () {
                exec = window.setInterval(refreshv, interval);
            }
        });
    }

    var exec = window.setInterval(refreshv, 1000);
</script>


</body>
</html>
