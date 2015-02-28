<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model {

    protected $fillable=['thedie_id','set_id','energytype_id','subtitle','maxdie','cost','text','burst1','burst2','global','number','special','affiliation_id','rarity_id'];

}
