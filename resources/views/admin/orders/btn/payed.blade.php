<?php $order=\App\Models\Order::find($id)?>
@if($order->payed)
    <p style="color: green" >
       Yes
    </p>
@else
    <p style="color: red">
        NO
    </p>
@endif
