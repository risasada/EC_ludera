@extends('layouts.app')
@push('css')
<link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endpush
@php

$all = 0;

@endphp

@section('content')
<div class="cart-menu-wrap">

    <!-- LEFT MENU -->
    <div class="cart-left-menu">
        <h4>ショッピングカート</h4>
        <div class="cart-list">
            <div class="cart-list-head">
                <h4 id="cart-head-left"></h4>
                <h4 id="cart-head-center">商品</h4>
                <h4 id="cart-head-right">合計</h4>
            </div>
            @foreach($cart_item as $cart)
            <div class="cart-item">
                <div class="img-wrap">

                    <img width="75" height="113" src="{{ Storage::url($cart[0]['img_url1']) }}" alt="">
                </div>
                <div class="item-detail">
                    <h4>{{$cart[0]['designers']}}</h4>
                    <ul class="ul-one">
                        <li>{{$cart[0]['name']}}</li>
                        <li>{{$cart[0]['made_in']}}</li>
                        <li>{{$cart[0]['material']}}</li>
                        <li>{{$cart[0]['categories']}}</li>
                    </ul>
                    <div class="size-wrap">
                        <h4>size: </h4>
                        <h4>{{$cart[0]['size']}}</h4>
                    </div>
                    <div class="hosii-link">
                        <form>
                            <input type="submit" value="欲しいもの">
                        </form>
                    </div>
                </div>
                <div class="item-price">
                    <h4>¥{{$cart[0]['price']}}</h4>
                    <div class="delete-link">
                        <form action = "/cart/delete" method="POST">
                            @csrf
                            <input type="hidden" value={{$cart[0]['id']}} name="item_id">
                            <input type="submit" value="delete" name="delete">
                        </form>
                    </div>
                </div>
            </div>
            @php
            $all += $cart[0]['price']
            @endphp
            @Endforeach

            <div class="cart-list-footer">
                <div class="cart-list-footer-empty"></div>
                <div class="cart-list-footer-colum">
                    <div class="cart-sum">
                        <h4 class="left">合計</h4>
                        <h4 class="right">¥{{$all}} JPY</h4>
                    </div>
                    <div class="cart-dely">
                        <h4 class="left">送料 (推定)</h4>
                        <h4 class="right">チェックアウト時に精算</h4>
                    </div>
                    <div class="cart-tax">
                        <h4 class="left">関税と消費税</h4>
                        <h4 class="right">ご注文合計に込み</h4>
                    </div>
                    <div class="cart-sum-sum">
                        <h4 class="left">ご注文の合計</h4>
                        <h4 class="right">¥{{$all}} JPY</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- RIGHT MENU -->
    <div class="cart-right-menu">
        <div class="cart-right-menu-content-wrap">
            <div class="cart-checkout">
                <h4>チェックアウト</h4>
                <p>メールアドレスを入力してログインしていただくか、ゲストとしてチェックアウトへおすすみ下さい。</p>
            </div>
            <div class="cart-mailadless">
                <h4>メールアドレス</h4>
                <input class="cart-email" type="text" name="" id="">
                <input class="cart-submit" type="submit" name="" id="">
            </div>
        </div>
    </div>
</div>
</body>

</html>
© 2022 GitHub, Inc.
Terms
Privacy

@endsection