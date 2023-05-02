<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'priority_id',
        'project_id',
        'status_id',
        'title',
        'creator_id',
        'description',
        'context',
        'browser',
        'os',
        'url'
    ];

    /**
     * Get the status.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);

    }


    /**
     * Get the type.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }


    /**
     * Get the post that owns the comment.
     */
    public function priority(): BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }

}
