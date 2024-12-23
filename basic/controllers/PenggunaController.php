<?php

namespace app\controllers;

use app\models\pengguna;
use app\models\PenggunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenggunaController implements the CRUD actions for pengguna model.
 */
class PenggunaController extends Controller
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
     * Lists all pengguna models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenggunaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single pengguna model.
     * @param int $Id_pengguna Id Pengguna
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_pengguna)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_pengguna),
        ]);
    }

    /**
     * Creates a new pengguna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new pengguna();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_pengguna' => $model->Id_pengguna]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing pengguna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_pengguna Id Pengguna
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_pengguna)
    {
        $model = $this->findModel($Id_pengguna);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_pengguna' => $model->Id_pengguna]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing pengguna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_pengguna Id Pengguna
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_pengguna)
    {
        $this->findModel($Id_pengguna)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the pengguna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_pengguna Id Pengguna
     * @return pengguna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_pengguna)
    {
        if (($model = pengguna::findOne(['Id_pengguna' => $Id_pengguna])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
