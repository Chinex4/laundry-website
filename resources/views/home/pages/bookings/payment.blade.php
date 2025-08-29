<x-home-layout>
    <section class="page-header">
        <div class="container">
            <h2>Payment for Booking #{{ $booking->id }}</h2>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <p>Hello <strong>{{ $booking->name }}</strong>, please transfer the payment to:</p>
            <ul>
                <li><strong>Bank:</strong> GTBank</li>
                <li><strong>Account Name:</strong> Elite Wash Laundry</li>
                <li><strong>Account Number:</strong> 1234567890</li>
                <li><strong>Amount:</strong> ₦{{ number_format($booking->amount) }}</li>
            </ul>

            <form action="{{ route('bookings.uploadPayment', $booking->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="comment-form__input-box">
                    <label for="payment_proof">Upload Proof of Payment</label>
                    <input type="file" name="payment_proof" id="payment_proof" accept=".jpg,.jpeg,.png,.pdf" required>
                </div>
                @error('payment_proof')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <div class="comment-form__btn-box mt-4">
                    <button type="submit" class="thm-btn">Submit Proof <span class="icon-right-arrow"></span></button>
                </div>
            </form>
        </div>
    </section>
</x-home-layout>