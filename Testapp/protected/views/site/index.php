<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?php
if (!isset($question->question)) {
	echo 'You answered all the questions!';
} else {
	echo $question->question;
}
?>


<?php echo CHtml::button('I know the solution',     array(
        'submit'=>array('Site/Correct')));
 ?>
 
<?php echo CHtml::button('I don\'t know the solution', array('submit' => array('Site/Next'))); ?>

<?php echo CHtml::button('Reset', array('submit' => array('Site/Reset'))); ?>





