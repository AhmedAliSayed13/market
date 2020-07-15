<?php $brand=\App\Models\Brand::find($id)?>
<div class="avatar">
    <a class="avatar" href="{{asset('/images_profile/'.$brand->image)}}" data-fancybox>
        <img class="avatar-img rounded" alt="User Image" src="{{asset('/images_profile/'.$brand->image)}}">
    </a>
</div>
