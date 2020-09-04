<?php

namespace App\Jobs\Article;

use App\Article;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

class Update
{
    use Dispatchable, Queueable;

    private $article;
    private $title;
    private $subtitle;
    private $slug;
    private $date;
    private $published;
    private $summary;
    private $content;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        Article $article,
        $title,
        $subtitle,
        $slug,
        $date,
        $published,
        $summary,
        $content
    ) {
        $this->article = $article;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->slug = $slug;
        $this->date = $date;
        $this->published = $published;
        $this->summary = $summary;
        $this->content = $content;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $article = $this->article;
        $article->title = $this->title;
        $article->subtitle = $this->subtitle;
        $article->slug = $this->slug;
        $article->date = $this->date;
        $article->published = $this->published;
        $article->summary = $this->summary;
        $article->content = $this->content;

        $article->save();
    }
}
