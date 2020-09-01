<?php $product=\App\Models\Product::find($id)?>
<div class="avatar">
    <a class="avatar" href="{{asset('/images_profile/'.$product->image)}}" data-fancybox>
        <img class="avatar-img rounded" alt="User Image" src="{{asset('/images_profile/'.$product->image)}}">
    </a>
</div>
