<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Inertia\Inertia;
class HomeController extends Controller
{
    private static $jsonFile;
    public function __construct(){
        self::$jsonFile = storage_path('app/projects.json');
    }
    private function dataTestingProjects(): array
    {
        return [
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'category' => 'team_project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'smarttrashku.amirzan.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'category' => 'team_project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'smarttrashku.amirzan.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            [
                'nama' => 'File-shares',
                'deskripsi' => '',
                'category' => 'self_project',
                'tech_stack' => 'laravel, tailwind, vue',
                'link' => 'file-sharing',
                'link_project'=> 'file-sharing.amirzan.my.id',
                'thumbnail' => 'testing/2.jpg',
                'foto' => ['testing/2.jpg', 'testing/3.png', 'testing/1.jpg'],
            ],
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'category' => 'team_project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'smarttrashku.amirzan.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            [
                'nama' => 'File-shares',
                'deskripsi' => '',
                'category' => 'self_project',
                'tech_stack' => 'laravel, tailwind, vue',
                'link' => 'file-sharing',
                'link_project'=> 'file-sharing.amirzan.my.id',
                'thumbnail' => 'testing/2.jpg',
                'foto' => ['testing/2.jpg', 'testing/3.png', 'testing/1.jpg'],
            ],
            [
                'nama' => 'TOkoKU',
                'deskripsi' => '',
                'category' => 'self_project',
                'tech_stack' => 'laravel, tailwind, vue, nuxt',
                'link' => 'tokoku',
                'link_project'=> 'tokoku.amirzan.my.id',
                'thumbnail' => 'testing/3.png',
                'foto' => ['testing/3.png', 'testing/1.jpg', 'testing/2.jpg'],
            ],
        ];
    }
    private function dataProjects(): array
    {
        return [
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'category' => 'team_project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'smarttrashku.amirzan.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            [
                'nama' => 'File-shares',
                'deskripsi' => '',
                'category' => 'self_project',
                'tech_stack' => 'laravel, tailwind, vue',
                'link' => 'file-sharing',
                'link_project'=> 'file-sharing.amirzan.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            [
                'nama' => 'TOkoKU',
                'deskripsi' => '',
                'category' => 'self_project',
                'tech_stack' => 'laravel, tailwind, vue, nuxt',
                'link' => 'tokoku',
                'link_project'=> 'tokoku.amirzan.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
        ];
    }
    private function getView($name = null, $dataShow = null){
        $env = env('APP_VIEW', 'blade');
        if($env == 'blade'){
            return view($name);
        }else if($env == 'inertia'){
            return Inertia::render('app', $dataShow);
        }else if($env == 'nuxt'){
            $indexPath = public_path('dist/index.html');
            if (File::exists($indexPath)) {
                $htmlContent = File::get($indexPath);
                $htmlContent = str_replace('<body>', '<body>' . '<script>const csrfToken = "' . csrf_token() . '";</script>', $htmlContent);
                return response($htmlContent)->cookie('XSRF-TOKEN', csrf_token(), 0, '/', null, false, true);
            } else {
                return response()->json(['error' => 'Page not found'], 404);
            }
        }
    }
    public function home(Request $request){
        // if (file_exists(self::$jsonFile)) {
        //     $projects = json_decode(file_get_contents(self::$jsonFile), true);
        // }else{
        //     $projects = $this->dataProjects();
        // }
        $projects = $this->datatestingProjects();
        shuffle($projects);
        $projects = array_slice($projects, 0, 3);
        $dataShow = [
            'viewData' => $projects,
        ];
        if ($request->wantsJson()) {
            return response()->json($dataShow);
        }
        return $this->getView('home');
    }
    public function projects(Request $request){
        // if (file_exists(self::$jsonFile)) {
        //     $projects = json_decode(file_get_contents(self::$jsonFile), true);
        // }else{
        //     $projects = $this->dataProjects();
        // }
        $projects = $this->dataTestingProjects();
        shuffle($projects);
        $dataShow = [
            'viewData' => $projects,
        ];
        if ($request->wantsJson()) {
            return response()->json($dataShow);
        }
        return $this->getView();
    }
    public function detailProject(Request $request, $link){
        // if (file_exists(self::$jsonFile)) {
        //     $projects = json_decode(file_get_contents(self::$jsonFile), true);
        // }else{
        //     $projects = $this->dataProjects();
        // }
        $projects = $this->dataTestingProjects();
        $others = [];
        $found = null;
        foreach($projects as $item){
            if($item['link'] == $link){
                unset($item['link']);
                $found = $item;
            }else{
                unset($item['link']);
                $others[] = $item;
            }
        }
        shuffle($others);
        if($found == null){
            if($request->wantsJson()) {
                return response()->json(['status' => 'error', 'message' => 'Project tidak ditemukan'], 404);
            }
            return $this->getView();
        }
        $dataShow = [
            'detailProject' => $found,
            'other' => $others,
        ];
        if ($request->wantsJson()) {
            return response()->json($dataShow);
        }
        return $this->getView();
    }
    public function downloadCV(Request $request){
        $filePath = storage_path("app/cv.pdf");
        if (!file_exists($filePath)) {
            return response()->json(['status' => 'error', 'message' =>'CV tidak ditemukan'], 404);
        }
        return Response::download($filePath, 'cv.pdf', [
        ]);
    }
}