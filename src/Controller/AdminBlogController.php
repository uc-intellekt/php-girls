<?php

namespace Controller;

use Doctrine\DBAL\Connection;
use Silex\Application;

/**
 * Created by PhpStorm.
 * User: Intellekt
 * Date: 03.05.2017
 * Time: 16:31
 */
class AdminBlogController
{
    public function deletePostAction(Application $app, $id)
    {
        /** @var Connection $conn */
        $conn = $app['db'];

        $sql = "DELETE FROM posts WHERE id = :post_id";
        $conn->executeQuery($sql, [
            'post_id' => $id,
        ]);

        return $app->redirect('/php/index.php/');
    }
}
