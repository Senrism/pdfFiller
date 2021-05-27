<?php

namespace App\Repositories;

// interfaces
use App\Contracts\FileLayoutContract;

// file Storage
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

// models
use App\Models\FileLayout;

class FileLayoutRepository implements FileLayoutContract{

    private $model;

    public function __construct(FileLayout $model){
        $this->model = $model;
    }

    public function storing(array $attributes){
        return $this->model->create([
                'name' => $attributes['Filename'],
        ]);
    }
}
