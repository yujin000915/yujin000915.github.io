<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Script Practice</title>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,200,300,400,500,600|Poppins:100,200,300,400,500,600,700,800&display=swap&subset=korean" rel="stylesheet">
    
    <!--css-->
    <link rel="stylesheet" href="./assets/scss/reset.scss">
    
    <!--script-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<style>
    .tab {
        display: flex;
        flex-direction: column;
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
    }
    .tmenu {
        display: flex;
        align-items: center;
        width: 100%;
    }
    .mbtn {
        width: 100%;
        height: 50px;
        border: 1px solid #ddd;
        background: #fff;
        cursor: pointer;
    }
    .mbtn.active {
        background: #000;
        color: #fff;
    }
    .tcon {
        display: flex;
        width: 100%;
    }
    .cont_wrap {
        display: none;
    }
    .cont_wrap.active {
        display: block;
    }
    .cont {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        padding: 20px 0;
    }
    .tbtn {
        width: 33.333%;
        height: 30px;
        margin-bottom: 10px;
        border: none;
        background: #fff;
    }
    .tbtn.active {
        font-weight: 600;
        color: blue;
    }
    .val_wrap {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 70px;
        padding: 0 10px;
        background: #eee;
        box-sizing: border-box;
    }
    .val {
        display: flex;
        align-items: center;
        width: 85%;
        height: 70px;
        overflow-x: overlay;
    }
    .vcont {
        display: flex;
        align-items: center;
        height: 35px;
        margin-right: 10px;
        padding: 0 10px;
        border-radius: 20px;
        border: 1px solid #000;
        background: #fff;
    }
    .v_txt {
        margin-right: 10px;
        word-break: keep-all;
    }
    .v_btn {
        border: none;
        background: none;
    }

    .reset_btn {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: none;
        background: #000;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }
</style>

<script>
    $(document).ready(function(){

        $('.mbtn').click(function() {
            $('.mbtn.active').removeClass('active');
            $(this).addClass('active');

            var tmenu = $(this).attr('data-tmenu');

            $('.cont_wrap.active').removeClass('active');
            $("#" + tmenu).addClass('active');
        });
        
        $('.tbtn').click(function() {
            $(this).addClass('active');

            var tbtn = $(this).text();
            var tbtnVal = $(this).attr('data-btn');
            var finVal = $('<div class="vcont"><p class="v_txt">' +tbtn+ '</p><button class="v_btn" onclick="val(this, \''+tbtnVal+'\');">X</button></div>');

            $('.val_wrap .val').append(finVal);

            console.log();
        });
        
        
        $('.reset_btn').click(function() {
            $('.vcont').remove();
            $('[data-btn]').removeClass('active');
        });

    });

    function val(btn, tbtnVal) {
        $(btn).parent().remove();
        $('[data-btn="'+tbtnVal+'"]').removeClass('active');

        console.log(tbtnVal);
    }
</script>

<body>
    <div class="tab">
        <div class="tmenu">
            <button data-tmenu="t01" class="active mbtn">젤리</button>
            <button data-tmenu="t02" class="mbtn">과일</button>
            <button data-tmenu="t03" class="mbtn">술</button>
        </div>

        <div class="tcont">
            <div class="cont_wrap active" id="t01">
                <div class="cont">
                    <button data-btn="jelly_01" class="tbtn">마이쮸</button>
                    <button data-btn="jelly_02" class="tbtn">새콤달콤</button>
                    <button data-btn="jelly_03" class="tbtn">마이구미</button>
                    <button data-btn="jelly_04" class="tbtn">아이셔</button>
                </div>
            </div>

            <div class="cont_wrap" id="t02">
                <div class="cont">
                    <button data-btn="fruit_05" class="tbtn">수박</button>
                    <button data-btn="fruit_06" class="tbtn">메론</button>
                    <button data-btn="fruit_07" class="tbtn">참외</button>
                    <button data-btn="fruit_08" class="tbtn">귤</button>
                    <button data-btn="fruit_09" class="tbtn">바나나</button>
                    <button data-btn="fruit_10" class="tbtn">복숭아</button>
                </div>
            </div>

            <div class="cont_wrap" id="t03">
                <div class="cont">
                    <button data-btn="acol_11" class="tbtn">소주</button>
                    <button data-btn="acol_12" class="tbtn">맥주</button>
                    <button data-btn="acol_13" class="tbtn">막걸리</button>
                    <button data-btn="acol_14" class="tbtn">위스키</button>
                    <button data-btn="acol_15" class="tbtn">고량주</button>
                    <button data-btn="acol_16" class="tbtn">샴페인</button>
                </div>
            </div>
        </div>

        <div class="val_wrap">
            <div class="val"></div>
            <button class="reset_btn">X</button>
        </div>
    </div>
</body>

</html>
