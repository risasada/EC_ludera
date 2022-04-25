@extends('layouts.app')
@push('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
<!-- ここにcssを記述 -->


@section('content')

<form action="{{ asset('charge') }}" method="POST">
    {{ csrf_field() }}
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="100" data-name="Stripe決済デモ" data-label="決済をする" data-description="これはデモ決済です" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
    </script>
</form>

@endsection