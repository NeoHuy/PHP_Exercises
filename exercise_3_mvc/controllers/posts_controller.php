<?php
    class PostsController {
        public function index() {
            // we store all the posts in a variable
            $posts = Post::all();
            require_once('views/posts/index.php');
        }

        public function show() {
            // we expect a url of form ?controller=posts&action=show&id=x
            // without an id we just redirect to the error page as we need the post id to find it in the database
            if(!isset($_GET['id'])) {
                return call('pages', 'error');
            }

            // we use the given id to get the right post
            $post = Post::find($_GET['id']);
            require_once('views/posts/show.php');
        }

        public function add() {
            require_once('views/posts/add.php');
            if(isset($_POST['add_submit'])) {
                $authorErr = $contentErr = '';
                $author = $content = '';
                if(empty($_POST['author'])) {
                    $authorErr = "Please enter a author's name";
                } else {
                    $author = $_POST['author'];
                }

                if(empty($_POST['content'])) {
                    $contentErr = "Please enter a content";
                } else {
                    $content = $_POST['content'];
                }

                if(!empty($author) && !empty($content)) {
                    Post::add($author, $content);
                }
            }
        }
    }
?>