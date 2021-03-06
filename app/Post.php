<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    //create relations in database to likes
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //create relations in database to tags
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    //create relations in database to users
    /* public function user(){
        return $this->belongsTo('App\User');
    }
    */

<<<<<<< HEAD
=======
    public function editPost($session, $id, $title, $content)
    {
        $posts = $session->get('posts');
        $posts[$id] = ['title' => $title, 'content' => $content];
        $session->put('posts', $posts);
    }

    private function createDummyData($session)
    {
        $posts = [
            [
                'title' => 'First article',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
                laborum.'
            ],
            [
                'title' => 'Second Article',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                 laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                  vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut 
                  fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                   Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                   sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat 
                   voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
                   laboriosam, nisi ut aliquid ex ea commodi consequatur? '
            ]
        ];
        $session->put('posts', $posts);
    }

    
>>>>>>> christian
}