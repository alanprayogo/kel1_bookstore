@extends('layouts.dashboard')

@section('page-title', 'Manage Direct Sale')

@section('content')
    {{-- Product Variant start --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Product Variant</h5>
                </div>
                <!--  start card-block  -->
                <div class="card-block button-list">
                    <!-- Biography -->
                    <button type="button" class="btn btn-default waves-effect">
                        Biography
                        <span class="badge">70</span>
                    </button>

                    <!-- Comics -->
                    <button type="button" class="btn btn-primary waves-effect waves-light">
                        Comics
                        <span class="badge">90</span>
                    </button>

                    <!-- Culture -->
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        Culture
                        <span class="badge">70</span>
                    </button>

                    <!-- Self-Dev -->
                    <button type="button" class="btn btn-warning waves-effect waves-light">
                        Self-Dev
                        <span class="badge">170</span>
                    </button>

                    <!-- Economics -->
                    <button type="button" class="btn btn-danger waves-effect waves-light">
                        Economics
                        <span class="badge">07</span>
                    </button>

                    <!-- Tech -->
                    <button type="button" class="btn btn-info waves-effect waves-light">
                        Tech
                        <span class="badge">80</span>
                    </button>

                    <!-- Geography -->
                    <button type="button" class="btn btn-info waves-effect waves-light">
                        Geography
                        <span class="badge">80</span>
                    </button>

                    <!-- History -->
                    <button type="button" class="btn btn-default waves-effect">
                        History
                        <span class="badge">70</span>
                    </button>

                    <!-- Language -->
                    <button type="button" class="btn btn-primary waves-effect waves-light">
                        Language
                        <span class="badge">90</span>
                    </button>

                    <!-- Novel -->
                    <button type="button" class="btn btn-success waves-effect waves-light">
                        Novel
                        <span class="badge">70</span>
                    </button>

                    <!-- Religion -->
                    <button type="button" class="btn btn-warning waves-effect waves-light">
                        Religion
                        <span class="badge">170</span>
                    </button>

                    <!-- Science -->
                    <button type="button" class="btn btn-danger waves-effect waves-light">
                        Science
                        <span class="badge">07</span>
                    </button>

                </div>
                <!-- end of card-block  -->
            </div>
            <!-- end of card -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    {{-- Product Variant end --}}
    <div class="row">
        {{-- Product Table Start --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-12">
                        <h5 class="card-header-text">Product Table</h5>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table-hover table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">#</th>
                                        <th style="width: 25%;">Product Name</th>
                                        <th style="width: 10%;">Stock</th>
                                        <th style="width: 10%;">Price</th>
                                        <th class="text-center" style="width: 30%; ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->product->product_name }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->product->product_price }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary waves-effect waves-light add-product-btn"
                                                    data-toggle="tooltip" data-placement="top" title="Add Product"
                                                    href="#" data-product-id="{{ $product->id }}"
                                                    data-product-name="{{ $product->product->product_name }}"
                                                    data-product-price="{{ $product->product->product_price }}"
                                                    data-product-stock="{{ $product->quantity }}">
                                                    <i class="ti-plus"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Product Table End --}}

        {{-- POS Start --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-12">
                        <h5 class="card-header-text">Point of Sales</h5>
                    </div>
                </div>
                <div class="card-block">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleCustomerName" class="form-control-label">Customer
                                        Name</label>
                                    <select class="form-control" id="exampleCustomerName" name="customer_id">
                                        <option selected disabled>Pilih Customer</option>
                                        @forelse ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @empty
                                            <option disabled>Tidak ada pelanggan tersedia</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="product-list">
                                    {{-- Form product, quantity, price otomatis trigger by add button table product --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleTax" class="form-control-label">Tax</label>
                                    <select class="form-control" id="exampleTax" name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleShipping" class="form-control-label">Shipping</label>
                                    <select class="form-control" id="exampleShipping" name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleDiscount" class="form-control-label">Discount</label>
                                    <select class="form-control" id="exampleDiscount" name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-block">
                                    <dl class="dl-horizontal row">
                                        <dt class="col-sm-9 font-weight-normal">Sub Total</dt>
                                        <dd class="col-sm-3">: $737.00</dd>
                                        <dt class="col-sm-9 font-weight-normal">Discount</dt>
                                        <dd class="col-sm-3">: $737.00</dd>
                                        <dt class="col-sm-9 font-weight-normal">Estimated Tax</dt>
                                        <dd class="col-sm-3">: $737.00</dd>
                                    </dl>
                                    <hr>
                                    <dl class="dl-horizontal row">
                                        <dt class="col-sm-9">Grand Amount</dt>
                                        <dd class="col-sm-3 font-weight-bold">: $737.00</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleCustomerName" class="form-control-label">Payment
                                        Method</label>
                                    <select class="form-control" id="exampleCustomerName" name="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit"
                                class="btn btn-primary waves-effect waves-light m-r-30 f-right">Payment</button>
                            <button type="reset"
                                class="btn btn-danger waves-effect waves-light m-r-30 f-right">Void</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- POS End --}}
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                // Event listener untuk tombol Add
                $('.add-product-btn').on('click', function(event) {
                    event.preventDefault();

                    // Ambil data produk dari tombol
                    const productId = $(this).data('product-id');
                    const productName = $(this).data('product-name');
                    const productPrice = parseFloat($(this).data('product-price'));
                    const productStock = parseInt($(this).data('product-stock')); // Stok tersedia

                    // Periksa apakah produk sudah ada dalam form
                    const existingRow = $(`#product-row-${productId}`);
                    if (existingRow.length > 0) {
                        // Jika produk sudah ada, tambahkan quantity dan update price
                        const quantityInput = existingRow.find('.product-quantity');
                        const priceInput = existingRow.find('.product-price');

                        let currentQuantity = parseInt(quantityInput.val()) || 0;

                        if (currentQuantity < productStock) {
                            currentQuantity += 1;

                            quantityInput.val(currentQuantity);
                            priceInput.val((productPrice * currentQuantity).toFixed(2));
                        } else {
                            alert(`Stock for ${productName} is limited to ${productStock}.`);
                        }
                    } else {
                        // Jika produk belum ada, tambahkan row baru (dengan validasi stok)
                        if (productStock > 0) {
                            const newRow = `
                    <div class="product-row" id="product-row-${productId}">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control product-name" value="${productName}" readonly>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control product-quantity" value="1" readonly>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control product-price" value="${productPrice.toFixed(2)}" readonly>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm delete-product-btn" data-product-id="${productId}" data-product-price="${productPrice}">
                                    <i class="ti-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                            $('#product-list').append(newRow);
                        } else {
                            alert(`Stock for ${productName} is out of stock.`);
                        }
                    }
                });

                // Event listener untuk tombol Delete
                $('#product-list').on('click', '.delete-product-btn', function(event) {
                    event.preventDefault();

                    // Ambil data produk dari tombol
                    const productId = $(this).data('product-id');
                    const productPrice = parseFloat($(this).data('product-price'));

                    // Cari elemen row terkait
                    const row = $(`#product-row-${productId}`);
                    const quantityInput = row.find('.product-quantity');
                    const priceInput = row.find('.product-price');

                    // Kurangi quantity dan update price
                    let currentQuantity = parseInt(quantityInput.val()) || 0;

                    if (currentQuantity > 1) {
                        currentQuantity -= 1;
                        quantityInput.val(currentQuantity);
                        priceInput.val((productPrice * currentQuantity).toFixed(2));
                    } else {
                        // Jika quantity mencapai 0, hapus row
                        row.remove();
                    }
                });
            });
        </script>
    @endpush
@endsection