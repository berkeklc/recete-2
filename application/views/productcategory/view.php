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

<main id="products">
    <section class="productList">
        <div class="container">
           
             

   <div class="col-md-2 product-container" style="">

                <div class="clearfix"></div>
                <div class="row">
                    <h3> <?= lang('cat'); ?></h3>
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

                
                   <div class="col-md-10">
                    <div class="row">
                        <?php if (! empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <div class="col-md-6" style="    max-height: 530px;margin-bottom:30px;padding-bottom:15px;
    border-bottom: 2px solid orange;">
                                    <div class="product">
                                        <a href="<?= clink(array('@product', $product->slug, $product->id)) ?>">
                                            <h3><?= $product->title ?></h3>


                                            <figure>
                                                <div class="image">
                                                    <img src="<?= uploadPath($product->image, 'product/normal') ?>"
                                                         alt="<?= htmlspecialchars($product->title) ?>"
                                                         class="img-responsive center-block ">
                                                </div>
                                                <button class="degisik" style="position: unset;    float: right;margin-top:15px;">
                                                <?= lang('detay'); ?>
                                                </button>
                                            </figure>


                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <div class="text-center">
                        <?php if (! empty($pagination)): ?>
                            <?= $pagination ?>
                        <?php endif; ?>
                    </div>
                </div>
         
        </div>
    </section>
</main>
</main>