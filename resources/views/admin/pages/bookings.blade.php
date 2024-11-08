<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Bookings</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Riyallure</a></li>
                                    <li class="breadcrumb-item active">Bookings</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="orderList">
                            <div class="card-header border-0">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="card-title mb-0">Booking History</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active All py-3" data-bs-toggle="tab" id="All"
                                                href="#home1" role="tab" aria-selected="true">
                                                <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="table-responsive table-card mb-1">
                                        <table class="table table-nowrap align-middle" id="orderTable">
                                            <thead class="text-muted table-light">
                                                <tr class="text-uppercase">
                                                    <th class="sort" data-sort="id">Booking ID</th>
                                                    <th class="sort" data-sort="customer_name">Customer Name</th>
                                                    <th class="sort" data-sort="product_name">Customer Email</th>
                                                    <th class="sort" data-sort="date">Customer Phone</th>
                                                    <th class="sort" data-sort="amount">Item</th>
                                                    <th class="sort" data-sort="payment">Quantity</th>
                                                    <th class="sort" data-sort="status">Service Type</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                    <th class="sort" data-sort="city">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($bookings as $book)
                                                    <tr>
                                                        <td class="id"><a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#{{ $book->id }}</a>
                                                        </td>
                                                        <td class="customer_name">
                                                            {{ $book->name }}</td>
                                                        <!-- Loop through items for each order -->
                                                        <td class="product_name">
                                                            {{ $book->email }}
                                                        </td>
                                                        </td>
                                                        <td class="date">{{ $book->phone }}</td>
                                                        <td class="amount">{{ $book->item }}</td>
                                                        <td class="payment">{{ $book->quantity }}</td>
                                                        <td class="status">{{ $book->service_type }}</->
                                                        </td>
                                                        <td class="status">{{ $book->status }}</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                
                                                                {{-- <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a aria-disabled="{{ $order->delivery_status === 'delivered' ? true : false }}"
                                                                        href="{{ route('deliver.order', $order->id) }}"
                                                                        class="btn btn-success text-white text-primary d-inline-block edit-item-btn">
                                                                        Delivered
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a aria-disabled="{{ $order->payment_status === 'paid' ? true : false }}"
                                                                        href="{{ route('admin.bookings.confirmPayment', $order->id) }}"
                                                                        class="btn btn-success text-white text-primary d-inline-block edit-item-btn">
                                                                        Confirm Payment
                                                                    </a>
                                                                </li> --}}
                                                                {{-- <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a href="{{ route('admin.bookings.download', $order->id) }}"
                                                                        class="btn bg-indigo-600 text-white text-primary d-inline-block edit-item-btn">
                                                                        Download PDF
                                                                    </a>
                                                                </li> --}}
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a class="btn btn-danger text-white d-inline-block remove-item-btn"
                                                                        onclick="return confirm('Are you sure you want to delete this order?')"
                                                                        href="{{ route('deleteBooking', $book->id) }}">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if (count($bookings) === 0)
                                            <div class="noresult">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted">No bookings yet.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <div class="gridjs-pagination">
                                                {!! $bookings->withQueryString()->links('pagination::bootstrap-5') !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Riyallure.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Soleric
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
