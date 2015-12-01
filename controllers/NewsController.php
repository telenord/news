<?php

class NewsController{

    public function actionAll(){

//       $news = News::getAll();
//        $view = new View();
//        $view->items = $news;
//        $view->display('news/all.php');

        // include __DIR__ . '/../views/news/all.php';
    }
    public static function actionOne()
    {
        $id = $_GET['id'];
        $new = News::getOne($id);
        $view = new View();
        $view->item = $new;
        $view->display('news/one.php');
      // include __DIR__ . '/../views/news/one.php';
    }

}