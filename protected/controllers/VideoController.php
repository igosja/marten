<?php

class VideoController extends Controller
{
    public function actionIndex()
    {
        $a_videocategory = Videocategory::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => `order`)
        );
        $o_page = PageVideo::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_videocategory' => $a_videocategory,
            'o_page' => $o_page,
        ));
    }

    public function actionMore($id)
    {
        $a_video = Video::model()->findAllByAttributes(
            array('status' => 1, 'videocategory_id' => $id),
            array('order' => 'id DESC', 'offset' => Yii::app()->request->getQuery('offset', 3), 'limit' => 3)
        );
        foreach ($a_video as $item) {
            $this->renderPartial('item', array('video' => $item, 'margin' => true));
        }
    }

    public function actionCheck($id)
    {
        $count = Video::model()->countByAttributes(
            array('status' => 1, 'videocategory_id' => $id)
        );
        $offset = (int) Yii::app()->request->getQuery('offset', 3) + 3;
        $remove = false;
        if ($count <= $offset) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}