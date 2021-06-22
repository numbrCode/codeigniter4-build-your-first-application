<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    /**
    * --------------------------------------------------------------------------
    *  Build Your First Application » News section
    * --------------------------------------------------------------------------
    *
    *   {@link http://codeigniter.com/user_guide/tutorial/news_section.html#setting-up-your-model}
    */
    protected $table = 'news';

    protected $allowedFields = ['title', 'slug', 'body'];

public function getNews($slug = false)
{
    if ($slug === false)
    {
        return $this->findAll();
    }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }
}