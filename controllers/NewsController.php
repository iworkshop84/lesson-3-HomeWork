<?php


class NewsController
{

    public function actionAll()
    {
        $items = News::getAll();
        //require __DIR__ . '/../views/news/all.php';
        $view = new View();
        $view->display('all.php', $items);
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        //require __DIR__ . '/../views/news/one.php';
        $view = new View();
        $view->display('one.php', $item);

    }
}