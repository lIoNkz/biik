<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BText;
use App\Models\Block;
use App\Models\Photo;

class FrontendController extends Controller
{
    public function index()
    {

    	$block1  = Block::where('id', 1)->with('texts')->first(); 
    	$block2  = Block::where('id', 2)->with('texts')->first(); 
    	$block3  = Block::where('id', 3)->with('texts')->first(); 
    	$block4  = Block::where('id', 4)->with('texts')->first(); 
    	$block5  = Block::where('id', 5)->with('texts')->first(); 
    	$block6  = Block::where('id', 6)->with('texts')->first(); 
    	$block7  = Block::where('id', 7)->with('texts')->first(); 
    	$block8  = Block::where('id', 8)->with('texts')->first(); 
    	$block9  = Block::where('id', 9)->with('texts')->first(); 
    	$block10 = Block::where('id', 10)->with('texts')->first(); 
    	$block11 = Block::where('id', 11)->with('texts')->first(); 
    	$block12 = Block::where('id', 12)->with('texts')->first(); 
    	$block13 = Block::where('id', 13)->with('texts')->first(); 
    	$block14 = Block::where('id', 14)->with('texts')->first(); 
    	$block15 = Block::where('id', 15)->with('texts')->first(); 
    	$block16 = Block::where('id', 16)->with('texts')->first(); 
    	$block17 = Block::where('id', 17)->with('texts')->first(); 
    	$block18 = Block::where('id', 18)->with('texts')->first(); 
    	$block19 = Block::where('id', 19)->with('texts')->first(); 
    	$block20 = Block::where('id', 20)->with('texts')->first(); 
        $block21 = Block::where('id', 21)->with('texts')->first();
        $block23 = Block::where('id', 23)->with('texts')->first();




    	$slider1 = Photo::where('alt', 'mainSlider')->get();
    	$slider2 = Photo::where('alt', 'youGet1')->get();
    	$slider3 = Photo::where('alt', 'youGet2')->get();
    	$slider4 = Photo::where('alt', 'youGet3')->get(); 
    	$slider5 = Photo::where('alt', 'gallery')->get(); 



















    	return view('frontend.index', compact('slider1', 'slider2', 'slider3', 'slider4', 'slider5'))->with([
    		'block1' => $block1,
    		'block2' => $block2,
    		'block3' => $block3,
    		'block4' => $block4,
    		'block5' => $block5,
    		'block6' => $block6,
    		'block7' => $block7,
    		'block8' => $block8,
    		'block9' => $block9,
    		'block10' => $block10,
    		'block11' => $block11,
    		'block12' => $block12,
    		'block13' => $block13,
    		'block14' => $block14,
    		'block15' => $block15,
    		'block16' => $block16,
    		'block17' => $block17,
    		'block18' => $block18,
    		'block19' => $block19,
    		'block20' => $block20,
            'block21' => $block21,
    		'block23' => $block23
    	]);
    }
}
