@php $i=0; @endphp
@if($invoices->count()>0)
    @foreach($invoices as $invoice)
        <tr>
            <td> {{ ++$i }}</td>
            <td> {{ $invoice->invoice_no }}</td>
            @if($invoice->supplier_id !=null)

                <td>
                    {{ $invoice->supplier['name'] }} <label class="label label-primary">Supplier</label>
                </td>
                <td> {{ $invoice->supplier['phone'] }}</td>
            @else
                <td>
                    {{ $invoice->patient['name'] }} <label class="label label-info">Customer</label>
                </td>
                <td> {{ $invoice->patient['phone'] }}</td>
            @endif

            <td> {{ $invoice->total }}</td>
            <td> {{ $invoice->discount }}</td>
            <td>
                @php $total=0; @endphp
                @if($invoice->supplier_id !=null)
                    @foreach($invoice->cashbooks as $cash)
                        @php
                            $total = $total+$cash->expense;
                        @endphp
                    @endforeach
                        {{ $total }}
                @else
                    @foreach($invoice->cashbooks as $cash)
                        @php
                            $total = $total+$cash->income;
                        @endphp
                    @endforeach
                    {{ $total }}

                @endif
            </td>

            <td>
                @if(($invoice->total-$invoice->discount)-$total !=0)
                    <label class="label label-danger">Due {{ ($invoice->total-$invoice->discount)-$total }} tk</label>
                @else
                    <label class="label label-success">Full Paid</label>
                @endif
            </td>
            <td>
                <a class="fa fa-print btn btn-info" href="{{ route('invoice.vaccinepurchase',$invoice->id) }}" target="_blank"></a> || <a href="{{ route('invoice.edit',$invoice->id) }}" class="fa fa-edit btn btn-primary"></a>
            </td>

        </tr>
    @endforeach

@else
    <tr> <td colspan="9" class="text-center bg-danger">No Report Found for view</td></tr>
@endif