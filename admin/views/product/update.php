
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-edit"></i> Kayıt Düzenle</div>
                <div class="panel-body">

                    <?php echo bsFormDropdown('categoryId', 'Ürün Kategorisi', array(
                        'required' => true,
                        'value' => $record->categoryId,
                        'options' => prepareForSelect($this->appmodel->getCategories(), 'id', 'title', 'Seçiniz')
                    )) ?>
                    <?php echo bsFormText('title', 'Başlık', array('required' => true, 'value' => $record->title)) ?>
                    <?php echo bsFormSlug('slug', 'Slug', array('required' => true, 'value' => $record->slug)) ?>

                    <?php echo bsFormImage('image', 'Resim', array('value' => $record->image, 'path' => '../public/upload/product/')) ?>

                    <?php echo bsFormTextarea('summary', 'Özet', array('required' => true, 'value' => $record->summary)) ?>


                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>

       
    </form>
</div>

           