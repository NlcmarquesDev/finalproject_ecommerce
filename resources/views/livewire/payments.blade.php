<div>
    <div class="d-flex justify-content-between">
        <div>
            <input wire:model="tablesearch" type="search" name="tablesearch" class="form-control bg-white small  mb-3"
                placeholder="Search for..">
        </div>
        <div class="d-flex flex-column justify-content-between align-items-baseline">
            <h6>Payments Status :</h6>
            <select wire:model="paymentStatus" class="form-control bg-white small mb-3">
                <option value="">All</option>
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
                <option value="expired">Expired</option>
            </select>
        </div>
    </div>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>
                    <button wire:click="sortBy('id')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2 ">Id</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                </th>
                <th>
                    <button wire:click="sortBy('order_id')"
                        class="d-flex align-items-center border-0 bg-transparent p-0" style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Order id</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button>
                </th>
                <th>Transation id</th>
                <th>Payments Status</th>
                <th>Payments Gateway</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                @if ($paymentStatus === '' || $payment->payment_status === $paymentStatus)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td> {{ $payment->order_id }}</td>
                        <td> {{ $payment->transation_id }}</td>
                        <td> <span
                                class="badge rounded-pill {{ $payment->payment_status == 'paid' ? 'bg-success' : 'bg-danger' }}">{{ $payment->payment_status }}</span>
                        </td>
                        <td>{{ $payment->payment_gateway }} </td>
                        <td>{{ $payment->created_at }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    {{-- {{$payments->links()}} --}}
</div>
