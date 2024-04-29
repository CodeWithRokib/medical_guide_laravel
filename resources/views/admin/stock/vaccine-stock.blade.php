<table class='table table-striped'>
    <thead>
        <tr>
            <th>SN</th>
            <th>Vaccine Name</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>

            @php
                $j=$total=$stock=0;
                $warehouse_id = Auth::user()->warehouse_id;
            @endphp
            @foreach($vaccine_purchases as $product_purchase)
                @php
                    $purchased = App\Models\Purchase::query()->where('warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                    $sold = App\Models\Sale::query()->where('from_warehouse_id',$warehouse_id)->where('product_id',$product_purchase->product->id)->sum('qty');
                    $total = $purchased-$sold;
                @endphp
                @if( $total !=0 && $total<$limit)
                    <tr>
                        <td>{{++$j}}</td>
                        <td>{{$product_purchase->product->name}} </td>
                        <td>{{$total}}</td>
                    </tr>
                @endif
            @endforeach

    </tbody>
</table>

