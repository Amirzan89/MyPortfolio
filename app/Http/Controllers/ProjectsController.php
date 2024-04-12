<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class ProjectsController extends Controller
{
    private function dataProjects(): array
    {
        return [
            [
                'nama' => 'Smarttrashku',
                'deskripsi' => '',
                'tech_stack' => 'laravel, bootstrap',
                'link' => 'smarttrashku',
                'link_project'=> 'smarttrashku.amirzan.my.id',
            ],
            [
                'nama' => 'File-shares',
                'deskripsi' => '',
                'tech_stack' => 'laravel, tailwind, vue',
                'link' => 'file-sharing',
                'link_project'=> 'file-sharing.amirzan.my.id',
            ],
            [
                'nama' => 'TOkoKU',
                'deskripsi' => '',
                'tech_stack' => 'laravel, tailwind, vue, nuxt',
                'link' => 'tokoku',
                'link_project'=> 'tokoku.amirzan.my.id',
            ],
        ];
    }
    public function projects(Request $request, $link){
        $projects = $this->dataProjects();
        foreach($projects as $item){
            if($item['link'] == $link){
                unset($item['link']);
                $dataShow = [
                    'detailProject' => $item,
                    'other' => $projects[rand(0, count($projects) - 1)]
                ];
                if ($request->wantsJson()) {
                    return response()->json($dataShow);
                }
                return Inertia::render('app', $dataShow);
            }
        }
        $dataShow = [];
        if($request->wantsJson()) {
            return response()->json(['status' => 'error', 'message' => 'Toko tidak ditemukan'], 404);
        }
        return Inertia::render('app', $dataShow);
    }
}