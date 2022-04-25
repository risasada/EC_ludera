@extends('layouts.app')

@push('css')
<link href="{{ asset('css/manage.css') }}" rel="stylesheet">
@endpush
@section('content')
@php

$accessories = ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"];
$bags = ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"];
$clothing = ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"];
$shoes = ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"];

@endphp


<main>
    <div class="create">
        <form method="post" action="/manage/store" enctype="multipart/form-data">
            @csrf
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            <label for="price">price</label>
            <input type="number" name="price(not including tax)" id="price">
            <label for="gender">gender</label>
            <select name="gender">
                <option value="men's">men's</option>
                <option value="women's">women's</option>
            </select>
            <label for="categories">categories</label>
            <select name="categories" id="cateories">
                @foreach($accessories as $acce)
                <option value="{{$acce}}">{{$acce}}</option>

                @endforeach
            </select>
            <label for="designers">designers</label>
            <input type="text" name="designers" id="designers">
            <label for="made_in">made_in</label>
            <input type="text" name="made_in" id="made_in">
            <label for="material">material</label>
            <input type="text" name="material" id="material">
            <label for="xs">XS-STOCK</label>
            <input type="number" name="xs" id="xs">
            <label for="s">S-STOCK</label>
            <input type="number" name="s" id="s">
            <label for="m">M-STOCK</label>
            <input type="number" name="m" id="m">
            <label for="l">L-STOCK</label>
            <input type="number" name="l" id="l">
            <label for="ll">LL-STOCK</label>
            <input type="number" name="ll" id="ll">
            <label for="img1">image front</label>
            <input type="file" name="img1" accept="image/png, image/jpeg">/>
            <label for="img2">image2</label>
            <input type="file" name="img2" accept="image/png, image/jpeg">/>
            <label for="img3">image3</label>
            <input type="file" name="img3" accept="image/png, image/jpeg">/>
            <label for="img4">image4</label>
            <input type="file" name="img4" accept="image/png, image/jpeg">/>
            <div class="btn-area">
                <input type="submit" value="addition" class="btn submit-btn">
            </div>
        </form>
    </div>

</main>
@endsection