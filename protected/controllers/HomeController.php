<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HomeController extends FrontController {

    public function actionIndex() {
        $home = Page::model()->findByPk(1);
        $about = Page::model()->findByPk(2);
        $services = Page::model()->findByPk(3);
        $settings = Settings::model()->findByPk(1);
        $testimonials = Testimonial::model()->findAll();
        $prices = Price::model()->findAll();
        Yii::app()->clientScript->registerMetaTag($home->meta_tags, 'keywords');
        Yii::app()->clientScript->registerMetaTag($home->meta_description, 'description');
        $this->render('index', array(
            'home' => $home,
            'about' => $about,
            'services' => $services,
            'settings' => $settings,
            'prices' => $prices,
            'testimonials' => $testimonials
        ));
    }

    public function actionPage() {
        if (isset($_REQUEST['slug'])) {
            $model = Page::model()->findByAttributes(array('url' => $_REQUEST['slug']));
            if ($model) {
                Yii::app()->clientScript->registerMetaTag($model->meta_tags, 'keywords');
                Yii::app()->clientScript->registerMetaTag($model->meta_description, 'description');
                $this->render($_REQUEST['slug'], array('model' => $model));
            } else {
                echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
            }
        } else {
            echo '<img src="' . Yii::app()->request->getBaseUrl(true) . '/img/cons.gif" style="width:100%">';
        }
    }

}
