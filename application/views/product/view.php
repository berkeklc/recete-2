<style type="text/css">
    
    .bayifilan{color:#3a3a3a!important;}
</style>
<main id="main">


    <style>
        #sync1 .item{
            background: #0c83e7;
            padding: 80px 0px;
            margin: 5px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }
        #sync2 .item{
            background: #C9C9C9;
            padding: 10px 0px;
            margin: 5px;
            margin-right: 10px;
            color: #FFF;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
        }
        #sync2 .item h1{
            font-size: 18px;
        }
        #sync2 .synced .item{
            background: #121517;
        }
    </style>
    <!-- product-banner -->
    <section class="container-fluid" style="margin-top:30px;">
        <div class="row">

            <div class="bannercap">
                <div class="container">
                    <h1>
                      <?= lang('urunler'); ?> 
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

    <main id="products">
    <section class="productDetail">
        <div class="container">
            <div class="row">
     
                   <div class="col-md-2 product-container" style="">

                <div class="clearfix"></div>
                <div class="row">
                    <h3><?= lang('cat'); ?></h3>
                    <div style="    border-bottom: 1px solid;"></div>
                    <ul class="nav side-menu mB30">
                        <?php $c=50; foreach ($categories as $item): ?>

                            <li style="    background-color: #eee;">
                                <a href="<?php echo clink(array('@productcategory', $item->slug, $item->id)) ?>"><?php echo $item->title; ?></a>




                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
                <div class="col-md-10 " >
                    <div class="detail">
                        <h2 style="    padding-left: 30px;"><?= $product->title ?></h2>
                        <div class="col-sm-9 col-xs-12" style="margin-top:30px;">
                            <ul class="bxsliderBig">
                                <li>
                                    <a href="<?= uploadPath($product->image, 'product/normal') ?>"
                                       rel="gallery" class="galeriListe">
                                        <div class="bxItemBig"
                                             style="background-image:url('<?= uploadPath($product->image, 'product/normal') ?>');"></div>
                                    </a>
                                </li>
                                <?php if (!empty($product->images)): ?>
                                    <?php foreach ($product->images as $image): ?>
                                        <li>
                                            <a href="<?= uploadPath($image->image, 'product/normal') ?>"
                                               rel="gallery" class="galeriListe">
                                                <div class="bxItemBig"
                                                     style="background-image:url('<?= uploadPath($image->image, 'product/normal') ?>');"></div>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div><style>.bx-clone{display:none;}</style>
                        <div class="col-sm-2 hidden-xs">
                            <div class="row minibx">
                                <div class="col-sm-12" style="margin-top:30px;">
                                    <div id="bx-pager" class="bxsliderThumb">
                                        <div>
                                            <a data-slide-index="0" href="">
                                                <div class="bxItemThumb"
                                                     style="background-image:url('<?= uploadPath($product->image, 'product') ?>');"></div>
                                            </a>
                                        </div> 
                                        <?php if (!empty($product->images)): ?>
                                            <?php foreach ($product->images as $key => $image): ?>
                                                <div>
                                                    <a data-slide-index="<?= $key + 1 ?>" href="">
                                                        <div class="bxItemThumb"
                                                             style="background-image:url('<?= uploadPath($image->image, 'product/thumb') ?>');">

                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-12 margin-top-20 text-center">
                                    <span id="bxsliderThumb-prev"></span>
                                    <span id="bxsliderThumb-next"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 ">

                            <div class="carousel-project mB30">


                                <div class="w100 mT29">


                                    <article class="mb30" style="margin-top: 17px;">
                                     
                                                        <span style="font-size: 20px;
    color: #121517;"><?= lang('aciklama'); ?></span>

                                        <div style="  margin-top: -12px;
    margin-bottom: 17px;  border-bottom: 1px dashed black; "> &nbsp;</div>
                                        <p style=margin-top:5px;>
                                            <?= $product->summary ?><br>

                                        </p>
                            <span style="font-size: 20px;
    color: #121517;"><?= lang('ozellikler'); ?></span>

                                        <div style="margin-top: -12px;
    margin-bottom: 17px;    border-bottom: 1px dashed black; "> &nbsp;</div>
                                        <p style="    margin-top: 22px;"><?= $product->detail ?></p>
                                    </article>


                                </div>
                            </div>

                        </div>
                        

                    </div>
                <div class="container">
                </div>
    </section>
</main>
</main>  