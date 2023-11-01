<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="row">Id</th>
                <th>Descripcion</th>
                <th>Precio [USD]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->cost }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

