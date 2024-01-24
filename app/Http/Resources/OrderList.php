<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderList extends JsonResource
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
            'food_id' => $this->food_id,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
            'phone' => $this->phone,
            'food_name' =>$this->food_name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'status' => $this->status,
            'created-at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
