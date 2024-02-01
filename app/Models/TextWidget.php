<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextWidget extends Model
{
    protected $fillable = [
        "key",
        "image",
        "title",
        "content",
        "active",
    ];

    public static function getTitle(string $key): string
    {
        $widget= Cache::get('text-widget-'.$key,function() use ($key) {
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        });
        if ($widget) {
            $widget->title;
        }
        return '';
    }
    public static function getContent(string $key): string
    {
        $widget= Cache::get('text-widget-'.$key,function() use ($key) {
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        });
        if ($widget) {
            // dd($widget);
            return $widget->content;
        }
        return '';
    }

    public static function getImage (string $key): string{
        $widget= Cache::get('text-widget-'.$key,function() use ($key) {
            return TextWidget::query()->where('key', '=', $key)->where('active', '=', 1)->first();
        }); 
        if($widget){
            if(str_starts_with($widget->image, 'http')){
                return $widget->image;
            }
            return '/storage/'.$widget->image;
        }
        return '';
    }
 
    use HasFactory;
}
