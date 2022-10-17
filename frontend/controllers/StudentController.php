<?php

namespace frontend\controllers;

use yii;
use app\models\Student;
use app\models\StudentLogin;
use app\models\StudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;

/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
{
    public function beforeAction($action){
        if(Yii::$app->user->isGuest){
            if(Yii::$app->controller->action->id != 'login')
                return $this->redirect(['site/login']);
        }

        return true;
    }
    
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
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['login'],
                    'rules' => [
                        [
                            'actions' => ['login'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Student models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLogin(){
        if(!StudentLogin::isGuest()) return $this->actionUser();
        
        $model = new StudentLogin();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // echo "<pre>";
            // print_r($session->get('student')['token']);exit;
            // Yii::$app->session->setFlash('success', 'You are a ' . ($model->isPaid() ? 'Paid' : 'Free') . ' member.');
            return $this->render('/student_front/index');
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionUser(){
        return $this->render('/student_front/index');
    }

    public function actionLogout(){
        $model = new StudentLogin();
        $model->logout();
        return $this->redirect('login');
    }

    /**
     * Displays a single Student model.
     * @param int $iStudent I Student
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($iStudent)
    {
        return $this->render('view', [
            'model' => $this->findModel($iStudent),
        ]);
    }

    /**
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Student();

        if ($this->request->isPost) {
            if(!(empty($_FILES) && $model->validate())){
                if(!$model->upload()){
                    return $this->redirect(['index']);
                }
            }
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'iStudent' => $model->iStudent]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $iStudent I Student
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($iStudent)
    {
        $model = $this->findModel($iStudent);

        if ($this->request->isPost && $model->load($this->request->post()) && $this->changes($model) && $model->save()) {
            return $this->redirect(['view', 'iStudent' => $model->iStudent]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function changes($model){
        $model->upload();

        $model->vToken = md5($model->vEmail . $model->vToken);
    }

    /**
     * Deletes an existing Student model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $iStudent I Student
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($iStudent)
    {
        $this->findModel($iStudent)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $iStudent I Student
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($iStudent)
    {
        if (($model = Student::findOne(['iStudent' => $iStudent])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
