@extends('layouts.master')

@section('content')
<div class="container">
   <ul>
       @forelse ($notifications as $notification)
           @if ($notification->type === 'App\Notifications\PaymentReceived')
               <p class='text-green-500'>We have received a payment of ${{ $notification->data['amount'] / 100 }}.</p>
           @endif
           @empty
               <p>You have no unread notifications.</p>
       @endforelse
   </ul>
</div>    
@endsection