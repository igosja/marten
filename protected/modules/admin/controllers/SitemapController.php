<?php

class SitemapController extends AController
{
    public $h1 = 'Sitemap';
    public $title = 'Sitemap';

    public function actionIndex()
    {
        $this->breadcrumbs = array(
            $this->title
        );
        $this->render('index');
    }

    public function actionUpdate()
    {
        $content = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xhtml="http://www.w3.org/1999/xhtml" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/index/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/about/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/advantage/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/category/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/consult/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/contact/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/credit/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/dealer/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/guarantee/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/news/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/payment/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/product/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/project/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/review/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/video/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/why/index') . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/index/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/about/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/advantage/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/category/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/consult/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/contact/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/credit/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/dealer/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/guarantee/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/news/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/payment/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/product/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/project/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/review/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/video/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/why/index', array('language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        $a_news = News::model()->findAll(array('select' => 'url'));
        foreach ($a_news as $item) {
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/news/view', array('id' => $item['url'])) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/news/view', array('id' => $item['url'], 'language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        }
        $a_category = Category::model()->findAll(array('select' => 'url'));
        foreach ($a_category as $item) {
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/category/view', array('id' => $item['url'])) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/category/view', array('id' => $item['url'], 'language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        }
        $a_product = Product::model()->findAll(array('select' => 'url'));
        foreach ($a_product as $item) {
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/product/view', array('id' => $item['url'])) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
            $content = $content . '<url><loc>' . $this->createAbsoluteUrl('/product/view', array('id' => $item['url'], 'language' => 'uk')) . '</loc><lastmod>' . date('Y-m-d') . '</lastmod></url>';
        }
        $content = $content . '</urlset>';
        $fp = fopen(__DIR__ . '/../../../../sitemap.xml', 'w');
        fwrite($fp, $content);
        fclose($fp);

        $this->redirect(array('index'));
    }
}