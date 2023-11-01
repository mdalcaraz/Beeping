<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="row">Oder Ref</th>
                <th>Customer Name</th>
                <th>Total Qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderTotals as $orderTotal)
                <tr>
                    <td>{{ $orderTotal->order_ref }}</td>
                    <td>{{ $orderTotal->customer_name }}</td>
                    <td>{{ $orderTotal->total_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

