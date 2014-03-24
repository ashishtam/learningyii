<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
   
</head>

<body>
    
<div id="header">
	<div id="title">
		<div id="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/style/logo.png" alt="logo" />
                        EMS
		</div>
    

	</div>
</div>	
<div id="navigation-menu">
    <!--start -->
        <div id="mainmenu">
            <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
            )); ?>
        </div><!-- mainmenu -->
    <!-- end-->	
</div>
<div id="inner-container">
        <div class="nav-menu">
            <ul>
            <li><a href="<?php echo (Yii::app()->request->baseUrl .'/employee/index/index');?>">Employee Contacts</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/index/profile');?>">Create Profile</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/index/list-profile');?>">Show Profile</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/attendance/history');?>">Attendance History</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/attendance/check-in');?>">Check In</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/attendance/check-out');?>">Check Out</a></li>
            <li><a href="<?php echo (Yii::app()->request->baseUrl . '/employee/attendance/apply-leave');?>">Apply For Leave</a></li>
            
            </ul>
        </div>
        <div class="main-content">
                 <div class="breadcrumbs">
                    <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                        )); ?><!-- breadcrumbs -->
                    <?php endif?>
                </div>
            
        <?php echo $content; ?>
        </div>
 
</div>
<div style="clear:both;"></div>
    

<div id="copyright">&copy; Leapfrog Technology Inc.</div>


</body>
</html>
        
