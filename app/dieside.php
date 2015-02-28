<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class dieside extends Model {

	protected $fillable = ['thedie_id','sidetype','energytype_id','energyval','sidenum','burst','fielding','attack','defense'];

}
