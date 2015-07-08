<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Guru;
use frontend\models\GuruSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
use mPDF;
use dosamigos\tableexport\ButtonTableExport;
use yii\web\UploadedFile;
class GuruController extends Controller
{
    public function behaviors()
    {
        return [
                'access' => [
                'class' => AccessControl::className(),
                'only' => ['buat','update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    ],
                    ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $query = Guru::find();
        /*$mpdf=new mPDF();
            $mpdf->WriteHTML($this->renderPartial('index'));
            $mpdf->Output();
*/
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $guru = $query->orderBy('nama')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
            return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'guru' => $guru,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionBuat()
    {
        $model = new Guru();

        if ($model->load(Yii::$app->request->post())) {
            $imageName= $model->nama;
            $model->file=UploadedFile::getInstance($model, 'file');
            $model->file->saveAs( 'uploads/' . $imageName . '.' .   $model->file->extension );
            $model->logo = 'uploads/' . $imageName . '.' .   $model->file->extension;
            $model->save();
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('buat', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionPerbarui($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $imageName= $model->nama;
            $model->file=UploadedFile::getInstance($model, 'file');
            $model->file->saveAs( 'uploads/' . $imageName . '.' .   $model->file->extension );
            $model->logo = 'uploads/' . $imageName . '.' .   $model->file->extension;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('perbarui', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guru::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Halaman tidak tersedia.');
        }
    }
         /*public function actionCreate(){
            $mpdf=new mPDF();
            $mpdf->WriteHTML($this->renderPartial('index'));
            $mpdf->Output();
            $searchModel = new GuruSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            exit;
            return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
            //return $this->renderPartial('mpdf');
        }
        public function actionSample() {
            $mpdf = new mPDF;
            $mpdf->WriteHTML('Sample Text');
            $mpdf->Output();
            exit;
        }
        public function actionForce(){
            $mpdf=new mPDF();
            $mpdf->WriteHTML($this->renderPartial('index'));
            $mpdf->Output('MyPDF.pdf', 'D');
            exit;
        }
        public function actionTableExportAction()
        {
        return [
        // ...
        'download' => [
        'class' => TableExportAction::className()
        ]
        // ...
        ];
        }
        public function actionFruit(){
            return ['fruit'];
        }*/

}