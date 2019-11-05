<?php

namespace App\Models;

use NumberFormatter;
use App\Models\Category;
//not req now after 19
//use App\Scoping\Scoper;
//use Illuminate\Database\Eloquent\Builder;

use App\Models\ProductVariation;
use App\Models\Traits\CanBeScoped;
use Illuminate\Database\Eloquent\Model;
//will be req
// use App\Models\Traits\HasPrice;

use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;

class Product extends Model
{
    // use CanBeScoped, HasPrice;
    use CanBeScoped;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // FOR LATER
    public function getPriceAttribute($value)
    {
         return new Money($value, new Currency('GBP'));
    }

    public function getFormattedPriceAttribute()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('en_GB', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );
        return $formatter->format($this->price);
        // return '$120';
    }

    // public function scopeWithScopes(Builder $builder, $scopes=[])
    // {
    //     return (new Scoper(request()))->apply($builder, $scopes);
    // }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function variations()
    {
        //return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
        return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    }
    // public function inStock()
    // {
    //     return $this->stockCount() > 0;
    // }

    // public function stockCount()
    // {
    //     return $this->variations->sum(function ($variation) {
    //         return $variation->stockCount();
    //     });
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    // public function variations()
    // {
    //     return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    // }
}
