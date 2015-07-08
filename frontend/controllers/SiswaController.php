<?php
namespace frontend\controllers;
use yii;
use frontend\models\Siswa;
use frontend\models\SiswaSearch;
use yii\web\controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccesControl;
class SiswaController extends Controller
{
	public function behaviors()
{
        return [ /*
                'access' => [
                'class' => AccessControl::className(),
                'only' => ['nambah','perbarui'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    ],
                    ], */
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
    	$searchModel=new SiswaSearch();
    	$dataProvider=$searchModel->search(Yii::$app->request->queryParams);
    	return $this->render('index',[
    		'searchModel'=>$searchModel,
    		'dataProvider'=>$dataProvider,
    		]);
    }
    public function actionNambah(){
    	$model=new Siswa();
    	if($model->load(yii::$app->request->post())&& $model->save()){
    		return $this->redirect(['view','id'=>$model->id]);
 	   	} else {
 	   		return $this->render('nambah',[
 	   			'model'=>$model,
 	   			]);
 	   	}
    }
    public function actionView($id)
    {
        return $this->render('view',[
            'model'=>$this->findModel($id),
            ]);
    }
    public function actionPerbarui($id)
    {
        $model= $this->findModel($id);
        if($model->load(yii::$app->request->post())&& $model->save())
        {
            return $this->redirect(['view','id'=>$model->id]);
        } else {
            return $this->render('perbarui',[
                'model'=>$model,
                ]);
        }
    }
    public function findModel($id)
    {
        if (($model = Siswa::findOne($id))!==null
            ) {
            return $model;
        } else {
            throw new NotFoundHttpException('Halaman Tidak Ada');
        }
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
}
?>