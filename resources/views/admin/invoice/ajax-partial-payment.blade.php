{{--@php $i=0; @endphp--}}
{{--@foreach($invoices as $invoice)--}}
    {{--alert($invoices);--}}
    {{--<tr>--}}
        {{--<td>{{++$i}}</td>--}}
        {{--<td>{{$invoice->invoice_no}}</td>--}}
        {{--<td>{{$invoice->supplier->name}}</td>--}}
        {{--<td>{{$invoice->supplier->name}}</td>--}}
    {{--</tr>--}}
@php $i=0; $total_paid=0; $total_outstanding=0;@endphp
@foreach($invoices as $invoice)
    {{--{{dd($invoices)}}--}}
<tr>
    <td>{{++$i}}</td>
    <td>{{$invoice->invoice->invoice_no}}</td>
    <td>{{$invoice->invoice->patient['name'] or $invoice->invoice->supplier['name']}}</td>
    <td>{{$invoice->trxId}}</td>
    <td>{{$invoice->expense or $invoice->income}}</td>
    {{--<td>{{$invoice->income}}</td>--}}
    <td>{{$invoice->created_at->format('d/m/Y')}}</td>
    <td>{{$invoice->created_at->format('H:i:s')}}</td>
    @php
        $total_paid+=$invoice->expense;
        $total_outstanding+=$invoice->income;
    @endphp
{{--    <td>{{$invoice->cashbooks->where('invoice_id',$invoice->id)}}</td>--}}
</tr>
@endforeach
<tr>
    <td colspan="4" align="right"><strong>Total</strong></td>
    <td><strong>
            @if($total_paid == 0 )
                {{$total_outstanding}}
            @else
                {{$total_paid}}
            @endif
        </strong></td>
    <td></td>
    <td></td>
</tr>