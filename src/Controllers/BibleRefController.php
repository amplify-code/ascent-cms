<?php

namespace AmplifyCode\AscentCMS\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use Illuminate\Database\Eloquent\Model;

use AmplifyCode\AscentCMS\Bible\BibleReferenceParser;
use AmplifyCode\AscentCMS\Bible\Excpetions\BibleReferenceParserException;

class BibleRefController extends Controller
{

  public function parse(Request $request) {

        $brp = new BibleReferenceParser();

        try {

            $parsed = $brp->parseBibleRef($request->term);

            $result = array('result'=>'ok', 'data'=>$parsed);
            

        } catch (\Exception $e) {

            $result = array('result'=>'error', 'message'=>$e->getMessage());
            $parsed = null;

        }

        return response()->json($result);

  }

}
