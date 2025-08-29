@component('mail::message')
# New Booking Received ✅

A new booking has been made.

**Name:** {{ $booking->name }}  
**Email:** {{ $booking->email }}  
**Phone:** {{ $booking->phone }}  
**Item:** {{ $booking->item }}  
**Quantity:** {{ $booking->quantity }}  
**Service Type:** {{ $booking->service_type }}  
**Pickup Date:** {{ $booking->pickup_date ?? 'Not specified' }}  
**Delivery Date:** {{ $booking->delivery_date ?? 'Not specified' }}

@component('mail::button', ['url' => url('/')])
View Website
@endcomponent

Thanks,  
{{ config('app.name') }}
@endcomponent
