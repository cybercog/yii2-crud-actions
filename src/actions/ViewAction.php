<?php
/**
 * Created by PhpStorm.
 * User: Ekstazi
 * Date: 02.11.2014
 * Time: 14:01
 */

namespace ekstazi\crud\actions;


use yii\web\Response;

/**
 * Class ViewAction
 * View model action
 * @package ekstazi\crud\actions
 */
class ViewAction extends Action
{

    /**
     * @var string View file name
     */
    public $viewName = 'view';

    /**
     * @throws \yii\web\BadRequestHttpException
     * @throws \yii\web\NotFoundHttpException
     */
    public function run()
    {
        $model = $this->findModel(\Yii::$app->request->get());
        $this->ensureAccess(compact('model'));

        return $this->controller->render($this->viewName, compact('model'));
    }
} 