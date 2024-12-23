<?php

namespace app\controllers;

use app\models\klmpk;
use app\models\KlmpkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KlmpkController implements the CRUD actions for klmpk model.
 */
class KlmpkController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all klmpk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KlmpkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single klmpk model.
     * @param int $Id_pengelompokkan Id Pengelompokkan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_pengelompokkan)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_pengelompokkan),
        ]);
    }

    /**
     * Creates a new klmpk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new klmpk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_pengelompokkan' => $model->Id_pengelompokkan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing klmpk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_pengelompokkan Id Pengelompokkan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_pengelompokkan)
    {
        $model = $this->findModel($Id_pengelompokkan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_pengelompokkan' => $model->Id_pengelompokkan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing klmpk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_pengelompokkan Id Pengelompokkan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_pengelompokkan)
    {
        $this->findModel($Id_pengelompokkan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the klmpk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_pengelompokkan Id Pengelompokkan
     * @return klmpk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_pengelompokkan)
    {
        if (($model = klmpk::findOne(['Id_pengelompokkan' => $Id_pengelompokkan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
