<?php

namespace App\Jobs\Article;

use App\Article;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;

class Create
{
    use Dispatchable, Queueable;

    private $title;
    private $subtitle;
    private $slug;
    private $date;
    private $published;
    private $summary;
    private $content;
    private $author;

    private $article;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        $title,
        $subtitle,
        $slug,
        $date,
        $published,
        $summary,
        $content,
        User $author
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->slug = $slug;
        $this->date = $date;
        $this->published = $published;
        $this->summary = $summary;
        $this->content = $content;
        $this->author = $author;
    }

    public function getArticle(): Article
    {
        return $this->article;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $article = new Article;
        $article->title = $this->title;
        $article->subtitle = $this->subtitle;
        $article->slug = $this->slug;
        $article->date = $this->date;
        $article->published = $this->published;
        $article->summary = $this->summary;
        $article->content = $this->content;
        $article->author_id = $this->author->id;

        $article->save();

        $this->article = $article;
    }
}
