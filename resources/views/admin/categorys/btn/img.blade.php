<?php $category=\App\Models\Category::find($id)?>
<div class="avatar">
    <a class="avatar" href="{{asset('/images_profile/'.$category->image)}}" data-fancybox>
        <img class="avatar-img rounded" alt="User Image" src="{{asset('/images_profile/'.$category->image)}}">
    </a>
</div>
