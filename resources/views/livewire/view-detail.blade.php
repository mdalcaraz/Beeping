<div class="container">
    @foreach ($orderedOrders as $orden_id => $orden)
        <h2 class="text-white mt-5">Ref de Orden: {{ $orderData[$orden_id]['order_ref'] }} Nombre de Cliente: {{ $orderData[$orden_id]['customer_name'] }}</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID de Línea</th>
                    <th>Cantidad</th>
                    <th>Nombre de producto</th>
                    <th>Precio [USD]</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orden as $info)
                    <tr>
                        <td>{{ $info['id'] }}</td>
                        <td>{{ $info['qty'] }}</td>
                        <td>{{ $info['product_name'] }}</td>
                        <td>{{ $info['product_cost'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

</div>
