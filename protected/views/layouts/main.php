<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=utf-8">
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/app.ico" type="image/x-icon" /> 
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/breadCruamb.css"/>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div id="mainmenu">
            <?php $this->renderPartial('//layouts/menu'); ?>
        </div><!-- mainmenu -->
        <div class="container" id="page" style='min-width:100%'>

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->




            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

<?php echo $content; ?>

            <div class="clear"></div>

            

        </div><!-- page -->

    </body>
</html>


<style>
.filters > td
{
    min-width: 100px;
}
#customers-form
{
    max-width: 50%;
}
</style>