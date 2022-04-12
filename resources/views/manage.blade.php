@extends('layouts.app')

@section('content')

<main>
    <div class="create">
        <form action="" method="post">
            <label for="name">product_name</label>
            <input type="text" name="name" id="name">
            <label for="price">price</label>
            <input type="number" name="price(not including tax)" id="price">
            <select name="gender">
                <option value="men's">men's</option>
                <option value="women's">women's</option>
            </select>
            <select name="genre" id="genre">
                <option value="ACCESSRORIES">ACCESSRORIES</option>
                <option value="BAGGS">BAGGS</option>
                <option value="CLOTHING">CLOTHING</option>
                <option value="SHOES">SHOES</option>
            </select>
            <select name="categories2" id="categories2" disabled>
                <option disabled selected>選択してください</option>
            </select>
            <div class="btn-area">
                <input type="submit" value="addition" class="btn submit-btn">
            </div>
        </form>
    </div>

</main>
@endsection