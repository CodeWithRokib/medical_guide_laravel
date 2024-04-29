<table class='table table-striped'>
    <thead>
    <tr>
        <th>SN</th>
        <th>Product Name</th>
        <th>Stock</th>
    </tr>
    </thead>
    <tbody>
            @foreach ($other_purchases as $purchase)
                @php
                    $purchased = Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                    $sold = Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$purchase->product->id)->sum('qty');
                    $total = $purchased-$sold;
                    $stock+=$total;
                @endphp
                @if($total<= $request->limit)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $purchase->product->name }}</td>
                        <td>{{ $total }}</td>
                    </tr>
                @endif
            @endforeach
    </tbody></table>