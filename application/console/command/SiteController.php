<?php

/**
 * 控制器
 * @author 刘健 <code.liu@qq.com>
 */

namespace console\command;

use mix\web\Controller;

class SiteController extends Controller
{

    public function actionIndex()
    {
        $param = \Mix::$app->request->param();
        return 'Hello World';
    }

}
