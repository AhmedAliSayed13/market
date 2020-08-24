<?php $voucher=\App\Models\Voucher::find($id)?>
@if($voucher->active)
    <span style="color: #1c7430">Active <i class="fas fa-check-circle"></i></span>
@else
    <span style="color: red">Not Active <i class="fas fa-times-circle"></i></span>
@endif
