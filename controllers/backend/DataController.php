<?php

namespace kouosl\iletisimformu\controllers\backend;

use Yii;
use kouosl\iletisimformu\models\Data;
use kouosl\iletisimformu\models\DataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataController implements the CRUD actions for Data model.
 */
class DataController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Data models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Data model.
     * @param string $mail
     * @param integer $tel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mail, $tel)
    {
        return $this->render('view', [
            'model' => $this->findModel($mail, $tel),
        ]);
    }

    /**
     * Creates a new Data model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Data();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mail' => $model->mail, 'tel' => $model->tel]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Data model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $mail
     * @param integer $tel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mail, $tel)
    {
        $model = $this->findModel($mail, $tel);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mail' => $model->mail, 'tel' => $model->tel]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Data model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $mail
     * @param integer $tel
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mail, $tel)
    {
        $this->findModel($mail, $tel)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Data model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $mail
     * @param integer $tel
     * @return Data the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mail, $tel)
    {
        if (($model = Data::findOne(['mail' => $mail, 'tel' => $tel])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
