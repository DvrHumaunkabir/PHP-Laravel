<?php
class ArticleManager {
    function getAllArticles() {
        $apiEndPoint = "https://jsonplaceholder.typicode.com/posts";
        $content = file_get_contents($apiEndPoint);
        return $content;
    }

    function getSingleArticle($id = 1) {
        $apiEndPoint = "https://jsonplaceholder.typicode.com/posts/{$id}";
        $content = file_get_contents($apiEndPoint);
        return $content;
    }
}

$am = new ArticleManager();
// $allArticles = $am->getAllArticles();
// echo $allArticles;

$singleArticle = $am->getSingleArticle(10);
echo $singleArticle;