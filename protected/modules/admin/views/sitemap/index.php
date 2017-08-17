<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
    </div>
</div>
<ul class="list-inline preview-links text-center">
    <li>
        <?= CHtml::link(
            'Обновить',
            array('update'),
            array('class' => 'btn btn-default')
        ); ?>
    </li>
</ul>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered">
            <tr>
                <th>Текущий sitemap</th>
            </tr>
            <tr>
                <td>
                    <?= CHtml::link(
                        $this->createAbsoluteUrl('/sitemap.xml'),
                        $this->createUrl('/sitemap.xml'),
                        array('target' => '_blank')
                    ); ?>
                </td>
            </tr>
        </table>
    </div>
</div>