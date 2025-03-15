<?php

namespace App\Livewire\Content;

use App\Models\Content;
use Livewire\Component;

class Data extends Component
{
    public function render()
    {
        $dataContents = Content::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.content.data', [
            'contents' => $dataContents,
        ]);
    }
}
