<?php

namespace AmplifyCode\AscentCMS\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
 
use Illuminate\Database\Eloquent\Model;

use AmplifyCode\AscentCMS\Models\Swatch;

class SwatchesController extends Controller {

    public function css() {

        $contents = view('cms::swatches.css', ['swatches'=>Swatch::all()]);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', 'text/css');
        return $response;

    }
}
