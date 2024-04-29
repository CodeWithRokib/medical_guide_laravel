@php $i=0; @endphp
@if($invoices->count()>0)
    @foreach($invoices as $invoice_info)
        @php
            $total = 0;
            $balance = $invoice_info->total-$invoice_info->discount;
        @endphp
        @foreach($invoice_info->cashbooks as $data)
            @if($invoice_info->supplier_id!=null)
                @php
                    $total+=$data->expense;
                @endphp
            @else
                @php
                    $total+=$data->income;
                @endphp
            @endif
        @endforeach
        @php  $duetk = $balance-$total;   @endphp
        @if( $duetk !=0)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $invoice_info->invoice_no }}</td>
                <td>
                    @if($invoice_info->supplier_id != null)
                        {{ $invoice_info->supplier->name }} <label class="label label-primary">Supplier </label>
                    @else
                        {{ $invoice_info->patient->name }} <label class="label label-info"> customer</label>
                    @endif
                </td>
                <td id="tamount{{$invoice_info->id}}" data-id="{{ $invoice_info->total }}">
                    {{ $invoice_info->total }}
                </td>
                <td id="tdiscount{{ $invoice_info->id }}" data-id="{{ $invoice_info->discount }}" >
                    {{ $invoice_info->discount }}
                </td>
                <td id="afterdiscount{{ $invoice_info->id }}" data-id="{{ $balance }}">
                    {{ $balance  }}
                </td>

                <td id="balance{{  $invoice_info->id }}" data-id="{{ $duetk }}">
                    {{ $duetk  }}
                </td>
                <td id="tpaid{{ $invoice_info->id }}" data-id="{{ $total }}"> {{ $total  }} </td>
                <td>
                    <button type="button" id="dueamountpay" data-id="{{ $invoice_info->id }}" class="fa fa-money btn btn-info"></button>
                    <button type="button" id="log" data-id="{{ $invoice_info->id }}" class="fa fa-book btn btn-warning"></button>
                </td>
            </tr>
        @endif
    @endforeach
@else
    <tr><td colspan="9" rowspan="9" class="text-center bg-danger">No Due invoices</td></tr>
@endif
