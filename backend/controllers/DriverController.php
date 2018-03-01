<?php

namespace backend\controllers;

use Yii;
use backend\models\Driver;
use backend\models\Vehicle;
use backend\models\DriverSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\filters\AccessControl;

/**
 * DriverController implements the CRUD actions for Driver model.
 */
class DriverController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Driver models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DriverSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Driver model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Driver model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Driver();

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getinstance($model, 'file');
            if ($model->file) {
                $model->file->saveAs('uploads/' . $model->file->name);
                $model->avatar = $model->file->name;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $vehicle = new Vehicle();

                return $this->render('create', [
                    'model' => $model,
                    'vehicle' => $vehicle
                ]);
            }

        } else {
            $vehicle = new Vehicle();

            return $this->render('create', [
                'model' => $model,
                'vehicle' => $vehicle
            ]);
        }
    }

    /**
     * Updates an existing Driver model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getinstance($model, 'file');
            if ($model->file) {
                $model->file->saveAs('uploads/' . $model->file->name);
                $model->avatar = $model->file->name;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $vehicle = new Vehicle();

                return $this->render('update', [
                    'model' => $model,
                    'vehicle' => $vehicle
                ]);
            }

        } else {
            $vehicle = new Vehicle();

            return $this->render('update', [
                'model' => $model,
                'vehicle' => $vehicle
            ]);
        }
    }

    /**
     * Deletes an existing Driver model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Driver model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Driver the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Driver::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
