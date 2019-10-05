<?php

namespace App\Transformers;

use App\User;
use Illuminate\Support\Str;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user): array
    {
        return [
            //'id2' => $user->id,
            //'teama' => $user->team->name,
            'price' => intval('test'),
            //'price2' => Str::title($user->name),
        ];
    }
}
