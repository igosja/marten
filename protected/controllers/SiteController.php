<?php

class SiteController extends Controller
{
    public function actionLogin()
    {
        $model = new Login;
        if ($data = Yii::app()->request->getPost('Login')) {
            $username = $data['username'];
            $password = $data['password'];
            $identity = new UserIdentity($username, $password);
            if ($identity->authenticate()) {
                Yii::app()->user->login($identity);
                $this->redirect(array('admin/index'));
            } else {
                $model->error_login = 'Неправильная комбинация<br/>логин/пароль';
            }
        }
        $this->layout = 'login';
        $this->render('login', array('model' => $model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(array('site/login'));
    }

    public function actionIndex()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/protected/components/PHPExcel.php';

        $filepath = $_SERVER['DOCUMENT_ROOT'] . '/protected/1.xlsx';

        $inputFileType = PHPExcel_IOFactory::identify($filepath);

        $objReader = PHPExcel_IOFactory::createReader($inputFileType);

        $objPHPExcel = $objReader->load($filepath);

        $array = $objPHPExcel->getActiveSheet()->toArray();

        for ($i = 0, $count_array = count($array); $i < $count_array; $i++) {
            for ($j = 0, $count_sub = count($array[$i]); $j < $count_sub; $j++) {
                if (!$array[$i][$j]) {
                    unset($array[$i][$j]);
                }
            }
            $array[$i] = array_values($array[$i]);
            if (!$array[$i]) {
                unset($array[$i]);
            }
        }

        $array = array_values($array);

        $table_1 = '';
        $first = true;
        $th = true;
        $colspan = count($array[1]);
        for ($i = 0, $count_array = count($array); $i < $count_array; $i++) {
            if (1 == count($array[$i])) {
                $th = true;
            }
            if ($th) {
                if (!$first) {
                    $table_1 .= '</table>';
                }
                $table_1 .= '<table class="tov-char">';
            }
            $table_1 .= '<tr>';
            for ($j = 0, $count_item = count($array[$i]); $j < $count_item; $j++) {
                $break = false;
                if ($th) {
                    $table_1 .= '<th';
                    if (!$first) {
                        $table_1 .= ' colspan="' . $colspan . '"';
                    } elseif (2 == $j) {
                        $table_1 .= ' colspan="' . ($colspan - 2) . '"';
                        $break = true;
                    }
                    $table_1 .= '>' . $array[$i][$j] . '</th>';
                } else {
                    $table_1 .= '<td>' . $array[$i][$j] . '</td>';
                }
                if ($break) {
                    $j = $count_item;
                }
            }
            $table_1 .= '</tr>';
            $first = false;
            $th = false;
        }
        $table_1 .= '</table>';

        $filepath = $_SERVER['DOCUMENT_ROOT'] . '/protected/2.xlsx';

        $inputFileType = PHPExcel_IOFactory::identify($filepath);

        $objReader = PHPExcel_IOFactory::createReader($inputFileType);

        $objPHPExcel = $objReader->load($filepath);

        $array = $objPHPExcel->getActiveSheet()->toArray();

        for ($i = 0, $count_array = count($array); $i < $count_array; $i++) {
            for ($j = 0, $count_sub = count($array[$i]); $j < $count_sub; $j++) {
                if (!$array[$i][$j]) {
                    unset($array[$i][$j]);
                }
            }
            $array[$i] = array_values($array[$i]);
            if (!$array[$i]) {
                unset($array[$i]);
            }
        }

        $array = array_values($array);

        $table_2 = '';
        $first = true;
        $th = true;
        $colspan = count($array[1]);
        for ($i = 0, $count_array = count($array); $i < $count_array; $i++) {
            if (1 == count($array[$i])) {
                $th = true;
            }
            if ($th) {
                if (!$first) {
                    $table_2 .= '</table>';
                }
                $table_2 .= '<table class="tov-char">';
            }
            $table_2 .= '<tr>';
            for ($j = 0, $count_item = count($array[$i]); $j < $count_item; $j++) {
                $break = false;
                if ($th) {
                    $table_2 .= '<th';
                    if (!$first) {
                        $table_2 .= ' colspan="' . $colspan . '"';
                    } elseif (2 == $j) {
                        $table_2 .= ' colspan="' . ($colspan - 2) . '"';
                        $break = true;
                    }
                    $table_2 .= '>' . $array[$i][$j] . '</th>';
                } else {
                    $table_2 .= '<td>' . $array[$i][$j] . '</td>';
                }
                if ($break) {
                    $j = $count_item;
                }
            }
            $table_2 .= '</tr>';
            $first = false;
            $th = false;
        }
        $table_2 .= '</table>';

        $this->render('index', array('table_1' => $table_1, 'table_2' => $table_2));
    }
}