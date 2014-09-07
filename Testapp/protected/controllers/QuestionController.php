<?php

class QuestionController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionNext()
	{
		$connection = Yii::app()->db;
		$command = $connection->createCommand("CALL randomQuestion(:user_id, @out)");
		$command->bindParam(":user_id",Yii::app()->user->getId(),PDO::PARAM_INT);
		$command->execute();
		
		$questionID = Yii::app()->db->createCommand("select @out as result")->queryScalar();
        $question=Question::model()->findByAttributes(array('id'=>$questionID));
			
		$this->render('Site/index', array('question'=>$question));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}