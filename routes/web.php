<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $username = 'sagastvme';

    $response = Http::get('https://api.github.com/users/' . $username . '/repos');
    $repos = json_decode($response->body());

    $mappedRepos = array_map(function ($repo) use ($username) {
        return [
            'name' => $repo->name,
            'description' => $repo->description,
            'repo_link' => $repo->html_url,
            'icon' => "https://raw.githubusercontent.com/{$username}/{$repo->name}/main/img/icon_for_my_website.jpg",
        ];
    }, $repos);

    return view('test', ['response' => $mappedRepos]);
});

