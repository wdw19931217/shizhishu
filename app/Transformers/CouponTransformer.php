<?php

namespace App\Transformers;

use App\Models\Coupon;
use League\Fractal\TransformerAbstract;

class CouponTransformer extends TransformerAbstract
{
    public function transform(Coupon $coupon)
    {
        $used = isset($coupon->pivot->is_used) ? $coupon->pivot->is_used : 0;
        return [
            'id' => $coupon->id,
            'money' => str_replace('.00', '', $coupon->money),
            'min_amount' => str_replace('.00', '', $coupon->min_amount),
            'description' => $coupon->description,
            'satarTime' => $coupon->not_before->toDateString(),
            'expirAt' => $coupon->not_after->toDateString(),
            'isUsed' => $used,
        ];
    }
}
