<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class ProductVariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->resource instanceof Collection) {
            return ProductVariationResource::collection($this->resource);
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            //not req 'price' => $this->formattedPrice,
            'price' => $this->price
            //'price_varies' => $this->priceVaries(),
            // 'stock_count' => (int) $this->stockCount(),
            // 'type' => $this->type->name,
            // 'in_stock' => $this->inStock(),
            // 'product' => new ProductIndexResource($this->product),
        ];
    }
}
