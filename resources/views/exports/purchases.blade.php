<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Tipo Comprobante</th>
        <th>Fecha y hora</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($purchases as $purchase)
        <tr>
            <td>{{ $purchase->id }}</td>
            <td>{{ $purchase->tipo_comprobante }}</td>
            <td>{{ $purchase->fecha_hora }}</td>
            <td>{{ $purchase->total }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
