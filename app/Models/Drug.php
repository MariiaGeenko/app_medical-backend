<?php
declare(strict_types=1);

namespace App\Models;

use App\Models\Documents\Receipt;
use App\Models\Subjects\Pharmacy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $description_url
 * @property Receipt[] $receipts
 * @property string $image_url
 * @property Pharmacy[] $pharmacies
 * @property float $avg_rating
 * @property string $name
 */
class Drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'description_url',
        'image_url',
        'avg_rating',
        'name'
    ];

    function receipts(): HasMany
    {
        return $this->hasMany(Receipt::class);
    }
    function pharmacies(): BelongsToMany
    {
        return $this->belongsToMany(Pharmacy::class);
    }

    protected $casts = [
        'availability_pharmacies_ids' => 'array'
    ];
    public $timestamps = true;
}
