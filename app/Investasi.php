<?php

namespace App;

use App\WestJavaSectorManagement;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Investasi extends Model implements Viewable
{
    use Sluggable;
    use InteractsWithViews;

    protected $primaryKey = 'invest_id';
    protected $table = 'investasi';
    protected $fillable = [
        'image', 'support_file'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul_investasi'
            ]
        ];
    }
    
    public function sector()
{
    return $this->belongsTo(WestJavaSectorManagement::class, 'fk_sector');
}

}
