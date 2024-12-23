<?php

namespace app\controllers;

use app\models\menu;
use app\models\MenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuController implements the CRUD actions for menu model.
 */
class MenuController extends Controller
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
     * Lists all menu models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single menu model.
     * @param int $Kode_Menu Kode Menu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Kode_Menu)
    {
        return $this->render('view', [
            'model' => $this->findModel($Kode_Menu),
        ]);
    }

    /**
     * Creates a new menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new menu();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Kode_Menu' => $model->Kode_Menu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Kode_Menu Kode Menu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Kode_Menu)
    {
        $model = $this->findModel($Kode_Menu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Kode_Menu' => $model->Kode_Menu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Kode_Menu Kode Menu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Kode_Menu)
    {
        $this->findModel($Kode_Menu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Kode_Menu Kode Menu
     * @return menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Kode_Menu)
    {
        if (($model = menu::findOne(['Kode_Menu' => $Kode_Menu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
