<?php

namespace App\Models\Traits;

use NumberFormatter;
//use Money\Money;
use App\Cart\Money;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;

trait HasPrice
{
    public function getPriceAttribute($value)
    {
        //return new Money($value, new Currency('GBP'));
        return new Money($value);
    }

     public function getFormattedPriceAttribute()
     {
        //  $formatter = new IntlMoneyFormatter(
        //      new NumberFormatter('en_GB', NumberFormatter::CURRENCY),
        //      new ISOCurrencies()
        //  );
        //  return $formatter->format($this->price);
        return $this->price->formatted();
     }

}
