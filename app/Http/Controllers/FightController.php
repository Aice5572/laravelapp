<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FightController extends Controller
{
    
    public function index(Request $request, Response $response) {
 
$html = <<<E0F
<html>
<head>
<title>こんにちは/Index</title>
<style>
body {font-size:16px; color:#ffbf80; }
h1 { font-size:150px; text-align:right; color:#c71585;
    margin:-50px 0px -120px 0px; }
</style>
</head>
<body>
    <h1>ドーナツ</h1>
    <h3>頼みます</h3>
    <pre>{$request}</pre>
    <h3>返します</h3>
    <pre>{$response}</pre>
</body>
</html>
E0F;
            $response->setContent($html);
            return $response;

    }
}
