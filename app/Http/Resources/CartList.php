<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartList extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'food_id' => $this->food_id,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'user' => $this->userData->map(function ($user) {
            //     return new UserList($user);
            //  }),
            // 'food' => $this->food->map(function ($food) {
            //     return new FoodResources($food);
            // }) ,
        ];
    }
}
