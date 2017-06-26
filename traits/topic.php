<?php
class Topic
{
    public $title;
    public $content;
    public $published_at;

    public function __construct(
         $title,
         $content,
         $published_at = null)
    {
        $this->title = $title;
        $this->content  = $content;
        if(empty($published_at)) {
            $this->published_at = time();
        } else {
            $this->published_at = $published_at;
        }
    }
}
