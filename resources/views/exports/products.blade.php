<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Stock mínimo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->precio }}</td>
                <td>{{ $product->stock_cur }}</td>
                <td>{{ $product->stock_min }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
