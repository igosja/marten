<?php

class ProjectController extends Controller
{
    public function actionIndex($id = '')
    {
        if ($id) {
            $o_projectcategory = ProjectCategory::model()->findByAttributes(array('url' => $id));
            if (!$o_projectcategory) {
                $this->redirect(array('index'));
            }
        }
        $page = Yii::app()->request->getQuery('page', 1);
        $offset = ($page - 1) * Project::ON_PAGE;
        if (isset($o_projectcategory)) {
            $a_project = Project::model()->findAllByAttributes(
                array('status' => 1, 'projectcategory_id' => $o_projectcategory->primaryKey),
                array('offset' => $offset, 'limit' => Project::ON_PAGE, 'order' => 'id DESC')
            );
            $count = Project::model()->countByAttributes(
                array('status' => 1, 'projectcategory_id' => $o_projectcategory->primaryKey)
            );
        } else {
            $a_project = Project::model()->findAllByAttributes(
                array('status' => 1),
                array('offset' => $offset, 'limit' => Project::ON_PAGE, 'order' => 'id DESC')
            );
            $count = Project::model()->countByAttributes(array('status' => 1));
        }
        $more = false;
        if ($count > count($a_project) + $offset) {
            $more = true;
        }
        $page_total = ceil($count / Project::ON_PAGE);
        $page_first = $page - 4;
        if ($page_first < 1) {
            $page_first = 1;
        }
        $page_last = $page + 4;
        if ($page_last > $page_total) {
            $page_last = $page_total;
        }
        $page_prev = $page - 1;
        if ($page_prev < 1) {
            $page_prev = 0;
        }
        $page_next = $page + 1;
        if ($page_next > $page_total) {
            $page_next = 0;
        }
        $a_projectcategory = ProjectCategory::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => '`order`')
        );
        $o_page = PageProject::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_project' => $a_project,
            'a_projectcategory' => $a_projectcategory,
            'more' => $more,
            'o_page' => $o_page,
            'offset' => $offset,
            'page' => $page,
            'page_first' => $page_first,
            'page_last' => $page_last,
            'page_next' => $page_next,
            'page_prev' => $page_prev,
        ));
    }

    public function actionMore($id = '')
    {
        if ($id) {
            $o_projectcategory = ProjectCategory::model()->findByAttributes(array('url' => $id));
            if (!$o_projectcategory) {
                unset($o_projectcategory);
            }
        }
        if (isset($o_projectcategory)) {
            $a_project = Project::model()->findAllByAttributes(
                array('status' => 1, 'projectcategory_id' => $o_projectcategory->primaryKey),
                array(
                    'order' => 'id DESC',
                    'offset' => Yii::app()->request->getQuery('offset', 0) + Project::ON_PAGE,
                    'limit' => Project::ON_PAGE
                )
            );
        } else {
            $a_project = Project::model()->findAllByAttributes(
                array('status' => 1),
                array(
                    'order' => 'id DESC',
                    'offset' => Yii::app()->request->getQuery('offset', 0) + Project::ON_PAGE,
                    'limit' => Project::ON_PAGE
                )
            );
        }
        foreach ($a_project as $item) {
            $this->renderPartial('item', array('item' => $item));
        }
    }

    public function actionCheck($id = '')
    {
        if ($id) {
            $o_projectcategory = ProjectCategory::model()->findByAttributes(array('url' => $id));
            if (!$o_projectcategory) {
                unset($o_projectcategory);
            }
        }
        if (isset($o_projectcategory)) {
            $count = Project::model()->countByAttributes(
                array('status' => 1, 'projectcategory_id' => $o_projectcategory->primaryKey)
            );
        } else {
            $count = Project::model()->countByAttributes(
                array('status' => 1)
            );
        }
        $offset = (int)Yii::app()->request->getQuery('offset', 0) + Project::ON_PAGE;
        $remove = false;
        if ($count <= $offset + Project::ON_PAGE) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}