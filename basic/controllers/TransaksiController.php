<?php

namespace app\controllers;

use app\models\transaksi;
use app\models\TransaksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksiController implements the CRUD actions for transaksi model.
 */
class TransaksiController extends Controller
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
     * Lists all transaksi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransaksiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single transaksi model.
     * @param string $Kode_transaksi Kode Transaksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Kode_transaksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($Kode_transaksi),
        ]);
    }

    /**
     * Creates a new transaksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new transaksi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Kode_transaksi' => $model->Kode_transaksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing transaksi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Kode_transaksi Kode Transaksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Kode_transaksi)
    {
        $model = $this->findModel($Kode_transaksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Kode_transaksi' => $model->Kode_transaksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing transaksi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Kode_transaksi Kode Transaksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Kode_transaksi)
    {
        $this->findModel($Kode_transaksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the transaksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Kode_transaksi Kode Transaksi
     * @return transaksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Kode_transaksi)
    {
        if (($model = transaksi::findOne(['Kode_transaksi' => $Kode_transaksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
