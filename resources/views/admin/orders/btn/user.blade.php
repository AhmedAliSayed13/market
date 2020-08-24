<?php $order=\App\Models\Order::find($id)?>
<div class="avatar">
    <a class="avatar" href="{{asset('/site/upload_img/'.$order->user->image)}}" data-fancybox>
        <img class="avatar-img rounded" alt="User Image" src="{{asset('/site/upload_img/'.$order->user->image)}}"> {{$order->user->name}}
    </a>
</div>
