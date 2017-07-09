<?php

class VideoController extends Controller
{
    public function actionIndex()
    {
        $a_videocategory = VideoCategory::model()->findAllByAttributes(
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
            array(
                'order' => 'id DESC',
                'offset' => Yii::app()->request->getQuery('offset', 0) + Video::ON_PAGE,
                'limit' => Video::ON_PAGE
            )
        );
        foreach ($a_video as $item) {
            $this->renderPartial('item', array('video' => $item));
        }
    }

    public function actionCheck($id)
    {
        $count = Video::model()->countByAttributes(
            array('status' => 1, 'videocategory_id' => $id)
        );
        $offset = (int) Yii::app()->request->getQuery('offset', 0) + Video::ON_PAGE;
        $remove = false;
        if ($count <= $offset + Video::ON_PAGE) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}