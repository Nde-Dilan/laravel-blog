<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    public $table = 'posts';

    protected $casts = [
        "published_at"=>'datetime'
    ];
    protected $fillable = ["title","slug","thumbnail","body","active","published_at","user_id"];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function categories() : BelongsToMany {
        return $this->belongsToMany(Category::class, "category_posts");
    }

    public function shortText():string{
        return Str::words(strip_tags($this->body),30);
    }
    public function getFormattedDate():string{
        return $this->published_at->format("F GS Y");
    }

    public function getThumbnail (){
        if(str_starts_with($this->thumbnail, 'http')){
            return $this->thumbnail;
        }
        return '/storage/'.$this->thumbnail;
    }
}
