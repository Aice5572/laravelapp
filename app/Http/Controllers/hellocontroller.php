<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function index( $id='noname', $pass='unknown') {

        return <<<E0f
<html>
<head>
<title>Hello/index</title>
<style>
body {font-size:16px; color:#999; }
h1 { font-size:100px; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これはHelloコントローラーのindexアクションです。</p>
    <ul>
        <li>ID: {$id}</li>
        <li>PASS: {$pass}</li>
    </ul>
</body>
</html>
E0f;

    }
}
