<x-home-layout>
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(/template/laundry/assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Booking</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Booking</li>
                    <li><span>/</span></li>
                    <li class="active">Payment for Booking #{{ $booking->id }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- <section class="bg-green-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold">Payment for Booking #{{ $booking->id }}</h2>
        </div>
    </section> -->

    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 max-w-2xl">
            <!-- Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8">
                <!-- Greeting -->
                <p class="text-lg text-gray-700">
                    Hello <strong class="text-green-900">{{ $booking->name }}</strong>, please transfer the payment to:
                </p>

                <!-- Bank Details -->
                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex justify-between">
                        <span class="font-medium">Bank:</span> 
                        <span class="text-green-900 font-semibold">GTBank</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="font-medium">Account Name:</span> 
                        <span class="text-green-900 font-semibold">Elite Wash Laundry</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="font-medium">Account Number:</span> 
                        <span class="text-green-900 font-semibold">1234567890</span>
                    </li>
                    <li class="flex justify-between text-lg">
                        <span class="font-medium">Amount:</span> 
                        <span class="text-green-900 font-bold">₦{{ number_format($booking->amount, 2) }}</span>
                    </li>
                </ul>

                <!-- WhatsApp Instruction -->
                <p class="mt-6 text-gray-600 leading-relaxed">
                    After making your payment, please click the button below to 
                    <span class="font-semibold text-green-900">notify us via WhatsApp</span>.
                </p>

                <!-- WhatsApp Button -->
                @php
                    $whatsappNumber = '2349021381455'; // ✅ your WhatsApp number
                    $message = "Hello Elite Wash Laundry,%0A%0A"
                        . "I have made a payment for my booking.%0A"
                        . "Booking ID: #{$booking->id}%0A"
                        . "Name: {$booking->name}%0A"
                        . "Email: {$booking->email}%0A"
                        . "Phone: {$booking->phone}%0A"
                        . "Service: {$booking->service_type}%0A"
                        . "Item: {$booking->item}%0A"
                        . "Quantity: {$booking->quantity}%0A"
                        . "Amount: ₦" . number_format($booking->amount, 2) . "%0A%0A"
                        . "Please confirm my payment.";
                    
                    $whatsappLink = "https://wa.me/{$whatsappNumber}?text={$message}";
                @endphp

                <div class="mt-8 text-center">
                    <a href="{{ $whatsappLink }}" target="_blank"
                        class="inline-flex items-center justify-center px-6 py-3 bg-green-900 hover:bg-green-800 text-white text-lg font-semibold rounded-xl shadow-md transition">
                        <i class="fab fa-whatsapp mr-2 text-2xl"></i>
                        Notify Us on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-home-layout>
