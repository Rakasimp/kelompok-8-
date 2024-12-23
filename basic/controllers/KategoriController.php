<?php

namespace app\controllers;

use app\models\kategori;
use app\models\KategoriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriController implements the CRUD actions for kategori model.
 */
class KategoriController extends Controller
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
     * Lists all kategori models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KategoriSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single kategori model.
     * @param string $Jenis_Menu Jenis Menu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Jenis_Menu)
    {
        return $this->render('view', [
            'model' => $this->findModel($Jenis_Menu),
        ]);
    }

    /**
     * Creates a new kategori model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new kategori();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Jenis_Menu' => $model->Jenis_Menu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing kategori model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Jenis_Menu Jenis Menu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Jenis_Menu)
    {
        $model = $this->findModel($Jenis_Menu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Jenis_Menu' => $model->Jenis_Menu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing kategori model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Jenis_Menu Jenis Menu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Jenis_Menu)
    {
        $this->findModel($Jenis_Menu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the kategori model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Jenis_Menu Jenis Menu
     * @return kategori the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Jenis_Menu)
    {
        if (($model = kategori::findOne(['Jenis_Menu' => $Jenis_Menu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
