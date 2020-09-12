<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    public function HasDiscount()
    {
        $sNow = date('Y-m-d H:i:s');
        if ($sNow >= $this->discountStart_at && $sNow <= $this->discountEnd_at && isset($this->discountPercent))
            return true;
        else
            return false;
    }


    public function Company()
    {
        return $this->belongsTo('App\Company')->get()->first()->name;
    }
    
    protected $table = 'Product';
    static function NewProducts()
    {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date(
            'Y-m-d H:i:s',
            strtotime($sNow . ' + 1 week')
        );

        return Product::where(
            DB::raw(
                'date_format(updated_at, "%Y-%M-%d")'
            ),
            '>=',
            date('Y-m-d', strtotime($sNow))
        )->where('updated_at', '<=', date(
            'Y-m-d',
            strtotime($sNextWeek)
        ))->get();
    }

    static function Offerings()
    {
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date(
            'Y-m-d H:i:s',
            strtotime($sNow . ' + 1 week')
        );

        return Product::where(
            DB::raw(
                'date_format(discountEnd_at, "%Y-%M-  %d")'
            ),
            '>',
            date('Y-m-d', strtotime($sNow))
        )->where('updated_at', '<=', date(
            'Y-m-d',
            strtotime($sNextWeek)
        ))->get();
    }
}