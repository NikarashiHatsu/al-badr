<?php

namespace App\Http\Livewire\Dashboard\Blog;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $tags = [];
    public $old_blog_tags = [];
    public $blog_tags = [];

    public $blog;
    public $thumbnail;

    protected $rules = [
        'blog.creator_id' => ['required', 'exists:users,id'],
        'blog.slug' => ['required', 'string'],
        'blog.title' => ['required', 'string'],
        'blog.description' => ['required', 'string'],
        'blog.is_published' => ['required', 'boolean'],
        'blog.view_count' => ['required', 'integer'],
    ];

    protected $messages = [
        'blog.creator_id.required' => 'ID penulis harus diisi.',
        'blog.creator_id.exists' => 'ID penulis tidak ditemukan.',
        'blog.slug.required' => 'Slug harus diisi.',
        'blog.title.required' => 'Judul harus diisi.',
        'blog.description.required' => 'Deskripsi harus diisi.',
        'blog.is_published.required' => 'Status harus diisi.',
        'blog.view_count.required' => 'Jumlah pembaca harus diisi.',
    ];

    public function updatedThumbnail()
    {
        $this->validate([
            'thumbnail' => 'image|max:1024',
        ]);
    }

    public function update()
    {
        $this->blog->slug = date('Y-m-d-') . Str::slug($this->blog->title);
        $this->validate();

        try {
            if ($this->thumbnail) {
                Storage::disk(config('filesystems.default'))->delete($this->blog->thumbnail);

                $this->blog->thumbnail = $this->thumbnail->store('blogs', config('filesystems.default'));
            }

            if (array_diff($this->blog_tags)) {
                $this->blog->categories()->delete();

                foreach($this->blog_tags as $tag) {
                    $this->blog->categories()->insert([
                        'blog_id' => $this->blog->id,
                        'category_id' => $tag,
                    ]);
                }
            }

            $this->blog->save();
            $this->reset('thumbnail');
        } catch (\Throwable $th) {
            return session()->flash('error', 'Gagal memperbarui blog: ' . $th->getMessage());
        }

        return session()->flash('success', 'Berhasil memperbarui blog.');
    }

    public function mount(Blog $blog)
    {
        $this->tags = Category::all()->pluck('name', 'id');
        $this->blog_tags = $blog->categories()->pluck('category_id')->toArray();
        $this->old_blog_tags = $this->blog_tags;
        $this->blog = $blog;
    }

    public function render()
    {
        return view('livewire.dashboard.blog.edit');
    }
}
