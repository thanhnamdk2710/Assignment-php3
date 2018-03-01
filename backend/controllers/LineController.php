<?php

namespace backend\controllers;

use Yii;
use backend\models\Line;
use backend\models\VehicleType;
use backend\models\LineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\filters\AccessControl;

/**
 * LineController implements the CRUD actions for Line model.
 */
class LineController extends Controller
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
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'list'],
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
     * Lists all Line models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Line model.
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
     * Creates a new Line model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Line();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = "json";
            return ActiveForm::validate($model); 
        }

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getinstance($model, 'file');
            if ($model->file) {
                $model->file->saveAs('uploads/' . $model->file->name);
                $model->map = $model->file->name;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $vehicle_type = new VehicleType();

                return $this->render('create', [
                    'model' => $model,
                    'vehicle_type' => $vehicle_type
                ]);
            }
            
        } else {
            $vehicle_type = new VehicleType();

            return $this->render('create', [
                'model' => $model,
                'vehicle_type' => $vehicle_type
            ]);
        }
    }

    /**
     * Updates an existing Line model.
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
                $model->map = $model->file->name;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $vehicle_type = new VehicleType();

                return $this->render('update', [
                    'model' => $model,
                    'vehicle_type' => $vehicle_type
                ]);
            }
            
        } else {
            $vehicle_type = new VehicleType();

            return $this->render('update', [
                'model' => $model,
                'vehicle_type' => $vehicle_type
            ]);
        }
    }

    /**
     * Deletes an existing Line model.
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
     * Finds the Line model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Line the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Line::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionList ($id)
    {
        $countLine = Line::find()->where(['id' => $id])->count();

        $lines = Line::find()->where(['id' => $id])->all();

        if($countLine > 0)
        {
            foreach ($lines as $line) {
                echo "<option value='".$line->id."'>".$line->name."</option>";
            }
        } else {
            echo "<option> - </option>";
        }
    }
}
