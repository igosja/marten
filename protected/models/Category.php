<?php

class Category extends CActiveRecord
{
    public function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return array(
            array('parent_id', 'required'),
            array('parent_id, order, status', 'numerical'),
            array('h1_ru, h1_ua, name_ru, name_ua, seo_title_ru, seo_title_ua', 'length', 'max' => 255),
            array('text_ru, text_ua, seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'H1 (Русский)',
            'h1_ua' => 'H1 (Українська)',
            'name_ru' => 'Название (Русский)',
            'name_ua' => 'Название (Українська)',
            'parent_id' => 'Категория',
            'status' => 'Статус',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name_ru', $this->name_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'parent_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getTreeAdmin($a_category)
    {
        $category = array();
        foreach ($a_category as $item) {
            $category[] = array('id' => $item->primaryKey, 'name' => $item->name_ru, 'parent_id' => $item->parent_id);
        }
        $a_category = $this->parentChildSortAdmin('id', 'parent_id', 'name', $category);
        $category = array('Главная');
        foreach ($a_category as $item) {
            $category[$item['id']] = $item['name'];
        }
        return $category;
    }

    function parentChildSortAdmin($id_field, $parent_field, $name_field, $array, $parent_id = 0, &$result = array(), &$depth = 0)
    {
        foreach ($array as $key => $value) {
            if ($value[$parent_field] == $parent_id) {
                $value['depth'] = $depth;
                $depth_prefix = '';
                for ($i = 0; $i < $depth; $i++) {
                    $depth_prefix = $depth_prefix . '-';
                }
                $value[$name_field] = $depth_prefix . $value[$name_field];
                array_push($result, $value);
                unset($array[$key]);
                $oldParent = $parent_id;
                $parent_id = $value[$id_field];
                $depth++;
                $this->parentChildSortAdmin($id_field, $parent_field, $name_field, $array, $parent_id, $result, $depth);
                $parent_id = $oldParent;
                $depth--;
            }
        }
        return $result;
    }

    public function getTreeMenu($a_category)
    {
        $category = array();
        foreach ($a_category as $item) {
            $category[$item->id] = array(
                'id' => $item->id,
                'name' => $item['name_' . Yii::app()->language],
                'parent_id' => $item->parent_id,
            );
        }
        $category = $this->parentChildSortMenu($category);
        return $category;
    }

    function parentChildSortMenu(array &$elements, $parentId = 0) {
        $branch = array();
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->parentChildSortMenu($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['id']] = $element;
                unset($elements[$element['id']]);
            }
        }
        return $branch;
    }
}