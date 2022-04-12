@extends('layouts.app')

@section('content')

<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/comme.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/sacai_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Sacai 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/celine_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>

<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/Richardson1.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Richardson 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src="{{ asset('img/palmangels2.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Palm Angels 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>

<div class="Stories" id="Stories">
    <div class="episode">
        <a>
            <h4>
                <span>DESIGNERS WE LOVE</span>
            </h4>
        </a>
        <div class="label">
            <span>VIEW All STORIES</span>
        </div>
    </div>
    <div class="episode1">

    </div>
    <div class="episode2">

    </div>
    <div class="episode3">

    </div>
    <div class="episode4">

    </div>
</div>

<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/comme.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/sacai_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Sacai 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/celine_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>



<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/Richardson1.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Richardson 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src="{{ asset('img/palmangels2.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Palm Angels 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>



<div class="News" id="news">
    <h2>News</h2>
    <dl>
        <dt>2020.XX.XX</dt>
        <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
        <dt>2020.XX.XX</dt>
        <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
        <dt>2019.XX.XX</dt>
        <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
        <dt>2019.XX.XX</dt>
        <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
        <dt>2019.XX.XX</dt>
        <dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
    </dl>
</div>
<div class="Contact" id="contact">
    <h2>Contact</h2>
    <div class="form">
        <dl>
            <dt>NAME</dt>
            <dd><input type="text"></dd>
            <dt>E-mail</dt>
            <dd><input type=text></dd>
            <dt>MESSAGE</dt>
            <dd><textarea></textarea></dd>
        </dl>
        <button type="submit">送信</button>
    </div>
</div>

@endsection