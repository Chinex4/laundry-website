@component('mail::message')
# 💸 New Payment Proof Received

Hello Admin,

A customer just uploaded a proof of payment for their booking.  

**Booking Details:**
- 👤 Name: {{ $booking->name }}
- 📧 Email: {{ $booking->email }}
- 📦 Service: {{ $booking->service }}
- 💰 Amount: ₦{{ number_format($booking->amount, 2) }}

@component('mail::button', ['url' => asset('storage/' . $booking->payment_proof)])
🔗 View Payment Proof
@endcomponent

Thanks,  
{{ config('app.name') }}
@endcomponent
