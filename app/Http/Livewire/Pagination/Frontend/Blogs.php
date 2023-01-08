<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pagination.frontend.blogs', [
            'blogs' => Blog::paginate(9)
        ]);
    }
}
