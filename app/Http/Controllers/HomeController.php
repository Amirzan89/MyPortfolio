<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMe;
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
                'deskripsi' => 'pppp \n\n\n ppp',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'https://smarttrashku.amirzanfikri.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            [
                'nama' => 'Nganjuk Elok',
                'deskripsi' => 'pppp \n\n\n ppp',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap, vue',
                'link' => 'elok',
                'link_project'=> 'https://elok.amirzanfikri.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            [
                'nama' => 'EduAksi',
                'deskripsi' => 'pppp \n\n\n ppp',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'eduaksi',
                'link_project'=> 'https://eduaksi.amirzanfikri.my.id',
                'thumbnail' => 'testing/1.jpg',
                'foto' => ['testing/1.jpg', 'testing/2.jpg', 'testing/3.png'],
            ],
            // [
            //     'nama' => 'File-shares',
            //     'deskripsi' => 'pppppp \n\n\n\n ',
            //     'category' => 'self_project',
            //     'tech_stack' => 'laravel, tailwind, vue',
            //     'link' => 'file-sharing',
            //     'link_project'=> 'file-sharing.amirzan.my.id',
            //     'thumbnail' => 'testing/2.jpg',
            //     'foto' => ['testing/2.jpg', 'testing/3.png', 'testing/1.jpg'],
            // ],
            // [
            //     'nama' => 'TOkoKU',
            //     'deskripsi' => '',
            //     'category' => 'self_project',
            //     'tech_stack' => 'laravel, tailwind, vue, nuxt',
            //     'link' => 'tokoku',
            //     'link_project'=> 'tokoku.amirzan.my.id',
            //     'thumbnail' => 'testing/3.png',
            //     'foto' => ['testing/3.png', 'testing/1.jpg', 'testing/2.jpg'],
            // ],
        ];
    }
    private function dataProjects(): array
    {
        return [
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'https://smarttrashku.amirzanfikri.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            [
                'nama' => 'Nganjuk Elok',
                'deskripsi' => '',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'elok',
                'link_project'=> 'https://elok.amirzanfikri.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            [
                'nama' => 'EduAksi',
                'deskripsi' => '',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'eduaksi',
                'link_project'=> 'https://eduaksi.amirzanfikri.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            [
                'nama' => 'Project S5',
                'deskripsi' => '',
                'category' => 'Team Project',
                'tech_stack' => 'laravel, tailwind, vue, nuxt',
                'link' => 'iot',
                'link_project'=> 'https://eduaksi.amirzanfikri.my.id',
                'thumbnail' => '',
                'foto' => [''],
            ],
            // [
            //     'nama' => 'IkiShares',
            //     'deskripsi' => '',
            //     'category' => 'Self Project',
            //     'tech_stack' => 'laravel, tailwind, vue, nuxt',
            //     'link' => 'ikishares',
            //     'link_project'=> 'https://ikishares.amirzanfikri.my.id',
            //     'thumbnail' => '',
            //     'foto' => [''],
            // ],
            // [
            //     'nama' => 'TOkoKU',
            //     'deskripsi' => '',
            //     'category' => 'Self Project',
            //     'tech_stack' => 'laravel, tailwind, vue, nuxt',
            //     'link' => 'tokoku',
            //     'link_project'=> 'https://tokoku.amirzanfikri.my.id',
            //     'thumbnail' => '',
            //     'foto' => [''],
            // ],
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
        $projects = $this->dataTestingProjects();
        // $projects = array_merge(...array_fill(0, 5, $projects)); // make copy
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
        // $others = array_merge(...array_fill(0, 5, $others)); // make copy
        shuffle($others);
        if($found == null){
            if($request->wantsJson()) {
                return response()->json(['status' => 'error', 'message' => 'Project Not Found'], 404);
            }
            return $this->getView();
        }
        $found['deskripsi'] = implode('', array_map(function($item){
            return trim($item) !== '' ? '<p>' . $item . '</p>' : '<br>';
        }, explode('\n', $found['deskripsi'])));
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
            return response()->json(['status' => 'error', 'message' =>'CV Not Found'], 404);
        }
        return Response::download($filePath, 'cv.pdf', [
        ]);
    }
    public function sendContact(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'name'=>'required',
            'subject'=>'required',
            'description'=>'required',
        ],[
            'email.required'=>'Email must filled',
            'email.email'=>'Email invalid',
            'name.required'=>'Full Name must filled',
            'subject.required'=>'Subject must filled',
            'description.required'=>'Description must filled',
        ]);
        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->toArray() as $field => $errorMessages) {
                $errors = $errorMessages[0];
            }
            return response()->json(['status' => 'error', 'message' => $errors,'code' => 400]);
        }
        Mail::to($request->input('email'))->send(new ContactMe($request->all()));
        return response()->json(['status' => 'success', 'message' => 'Your message has been sent successfully! We will get back to you soon.']);
    }
}