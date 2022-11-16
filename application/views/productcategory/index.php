<style type="text/css">
    
    .bayifilan{color:#3a3a3a!important;}
</style><!-- product-banner -->
<section class="container-fluid" style="margin-top:30px;">
    <div class="row">

        <div class="bannercap">
            <div class="container">
                <h1>
                   <?= lang('categr'); ?>
                </h1>
            </div>

        </div>
    </div>
</section>
<!-- product-banner -->
<!-- product-desc -->

<style>
    body{
        background: #fff!important;}
</style>



<section class="content">
        <div class="container">



            <div class="col-md-2 product-container" style="">

                <div class="clearfix"></div>
                <div class="row">
                    <h3> <?= lang('cat'); ?></h3>
                    <div style="    border-bottom: 1px solid;"></div>
                    <ul class="nav side-menu mB30">
                        <?php $c=50; foreach ($categories as $urunler): ?>

                            <li style="    background-color: #eee;">
                                <a href="<?php echo clink(array('@productcategory', $urunler->slug, $urunler->id)) ?>"><?php echo $urunler->title; ?></a>




                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>



                <div class="col-md-10 urunlerbox">
                    <div class="col-md-12">
                    <?php $c=50; foreach ($categories as $urunler): ?>
                        <div class="col-md-4 thumbnail  col-sm-6 col-xs-12 boxes">

                            <figure>
                                <a href="<?php echo clink(array('@productcategory', $urunler->slug, $urunler->id)) ?>"><img
                                        src="<?= uploadPath($urunler->image, 'productcategory') ?>"
                                        alt="<?php echo htmlspecialchars($urunler->title) ?>"
                                        title="<?php echo htmlspecialchars($urunler->title) ?>"/></a>
                                <figcaption>
                                    <h2 style="    text-align: center;    font-size: 17px;"><?php echo $urunler->title; ?></h2>

                                </figcaption>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>




        </div>
    </section>