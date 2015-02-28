<?php namespace App\Http\Controllers;

use App\card;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\thedie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\set;
use App\dieside;
use App\energytype;
use App\affiliations;
use App\rarity;

class AdminController extends Controller {

	public function norm(){
        $diesides = DB::table('importdice')->get();
        $cards = DB::table('importcard2')->get();
        foreach($diesides as $side) {
            $set = set::firstOrCreate(['abbr'=>$side->set]);
            $die = thedie::firstOrCreate((['set_id'=>$set->id,'name'=>$side->name]));
            $energytype = energytype::firstOrCreate(['name'=>$side->energytype]);
            $dieside = dieside::firstOrCreate(['thedie_id'=>$die->id,'sidetype'=>$side->sidetype,'energytype_id'=>$energytype->id,'energyval'=>$side->energyval,'sidenum'=>$side->sidenum,'burst'=>$side->bursts,'fielding'=>$side->fielding,'attack'=>$side->attack,'defense'=>$side->defense]);
        }
        foreach($cards as $card){
            $set = set::firstOrCreate(['abbr'=>$card->set]);
            $die = thedie::firstOrCreate((['set_id'=>$set->id,'name'=>$card->title]));
            $energytype = energytype::firstOrCreate(['name'=>$card->energytype]);
            $affiliation = affiliations::firstOrCreate(['name'=>$card->affiliation]);
            $rarity = rarity::firstOrCreate(['name'=>$card->rarity]);
            $newcard = card::firstOrCreate(['thedie_id'=>$die->id, 'set_id'=>$set->id, 'energytype_id'=>$energytype->id, 'subtitle'=>$card->subtitle, 'maxdie'=>$card->maxdie, 'cost'=>$card->cost, 'text'=>$card->text, 'burst1'=>$card->burst1, 'burst2'=>$card->burst2, 'global'=>$card->global, 'number'=>$card->number, 'special'=>$card->special, 'affiliation_id'=>$affiliation->id, 'rarity_id'=>$rarity->id]);
        }
        return view('admin.normalize');
    }
}
