<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $images = [];

    public function save()
    {
        $this->validate([
            'images.*' => 'image|max:1024'
        ]);

        foreach ($this->images as $image) {
            $image->store('public');
        }

        $this->images = [];
    }

    public function render()
    {
        return view('livewire.image-upload', [
            'uploads' => collect(Storage::files('public'))
                ->filter(function ($file) {
                    return in_array(
                        strtolower(pathinfo($file, PATHINFO_EXTENSION)),
                        ['png', 'jpg', 'jpeg', 'gif', 'webp']
                    );
                })
                ->map(function ($file) {
                    return Storage::url($file);
                })
        ]);
    }
}
