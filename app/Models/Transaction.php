<?php

namespace Mytransaction\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * constant for transaction type income
     */
    const TYPE_INCOME = 'income';

    /**
     * constant for transaction type outcome
     */
    const TYPE_OUTCOME = 'outcome';

    /**
     * @var string
     */
    protected $table = 'transactions';

    /**
     * @var array
     */
    protected $fillable = ['issued_type', 'issued_value', 'user_id', 'issued_date', 'issued_status', 'issued_by', 'issued_image', 'issued_description'];

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeNoFilter($query)
    {
        return $query;
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeTypeIncome($query)
    {
        return $query->where('issued_type', '=', self::TYPE_INCOME);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeTypeOutcome($query)
    {
        return $query->where('issued_type', '=', self::TYPE_OUTCOME);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopePending($query)
    {
        return $query->where('issued_status', '=', '1');
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeAccepted($query)
    {
        return $query->where('issued_status', '=', '2');
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeCanceled($query)
    {
        return $query->where('issued_status', '=', '3');
    }

    /**
     * @param $query
     * @param $id
     *
     * @return mixed
     */
    public function scopeModelId($query, $id)
    {
        return $query->where('id', '=', $id);
    }

    /**
     * @param $query
     * @param $userId
     *
     * @return mixed
     */
    public function scopeUserId($query, $userId)
    {
        return $query->where('user_id', '=', $userId);
    }

    /**
     * @param $query
     * @param array $relationships
     *
     * @return mixed
     */
    public function scopeWithRelationships($query, $relationships = [])
    {
        if(count($relationships) > 0) {
            return $query->with($relationships);
        }
        return $query;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('Mytransaction\Models\User');
    }
}
