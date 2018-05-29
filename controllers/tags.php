<?php

namespace App;
class tags extends Controller
{
    function index()
    {
        $this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
        $this->posts = get_all("SELECT * FROM posts");
    }
    function view()
    {
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM posts NATURAL JOIN users WHERE post_id='$post_id'");
        $this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag ");
    }
}
