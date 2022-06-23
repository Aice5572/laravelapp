<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<E0f
<style>
body {font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#c71585;
    margin:-40px 0px -50px 0px; }
</style>
E0f;
$body ='</head><body>';
$end = '</body></html>';
function tag($tag,$txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class hellocontroller extends Controller
{
    public function index() {
        global $head, $style, $body, $end;

        $html = $head . tag('title','hello/index') . $style . 
            $body
                . tag('h1','index') . tag('p','this is Index page')
                . '<a href="/hello/other">go to Other page</a>'
                . $end;
        return $html;
}

    public function other () {
        global $head, $style, $body, $end;

        $html = $head . tag('title','hello/other') . $style . 
            $body
                . tag('h1','other') . tag('p','this is Other page')
                . $end;
        return $html;
    }
}

   