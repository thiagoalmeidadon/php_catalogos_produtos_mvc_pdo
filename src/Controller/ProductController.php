<?php
namespace Controller;

use DB\Connection;
use Entity\Product;
use View\View;

class ProductController
{
    public function index( $id)
    {
        $id = (int) $id;
        $pdo = Connection::getInstance();

        $view = new View('site/single.phtml');

        $view->product = (new Product($pdo))->find($id);

        return $view->render();
    }
}
