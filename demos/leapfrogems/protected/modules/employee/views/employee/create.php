<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/calendar/jquery.calendars.js"></script> 
<script type="text/javascript" src="js/calendar/jquery.calendars.plus.js"></script>
<link rel="stylesheet" type="text/css" href="js/calendar/jquery.calendars.picker.css"> 
<script type="text/javascript" src="js/calendar/jquery.calendars.picker.js"></script>
<script type="text/javascript" src="js/calendar/jquery.calendars.nepali.js"></script>
<script type="text/javascript" src="js/calendar/jquery.calendars.nepali-ne.js"></script>
<script>
$(document).ready(function() {
	$(".my-picker").calendarsPicker({
		calendar: $.calendars.instance('nepali', 'ne'),
		firstDay: 0
	});
});
</script>
<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Create Employee</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>