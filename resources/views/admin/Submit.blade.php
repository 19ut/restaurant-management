@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Checkout Summary</h1>
        <ul>
            @foreach($selectedItems as $item)
                <li>
                    {{ $item->title }} - Price: ${{ $item->price }}
                </li>
            @endforeach
        </ul>
        <p>Total: ${{ $totalPrice }}</p>
        <form action="{{ route('payment') }}" method="POST">
            @csrf
            <button type="submit">Pay Now</button>
        </form>
    </div>
@endsection
