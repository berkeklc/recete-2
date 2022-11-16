<!-- product-banner -->
<section class="container-fluid" style="margin-top:30px;">
    <div class="row">
        <div class="bannercap">
            <div class="container">
                <h1>
                    Ürünler
                </h1>
            </div>

        </div>
    </div>
</section>
<!-- product-banner -->
<!-- product-desc -->
<style type="text/css">
    
    .bayifilan{color:#3a3a3a!important;}
</style>
<style>
    body{
        background: #fff!important;}
</style>

<main id="products">
    <section class="productList">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-4 col-sm-push-0 col-xs-push-0">
                    <div class="row">
                        <?php if (! empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <div class="col-md-6">
                                    <div class="product">
                                        <a href="<?= clink(array('@product', $product->slug, $product->id)) ?>">
                                            <h3><?= $product->title ?></h3>
                                            <p>
                                                <?= $product->summary ?>
                                            </p>
                                            <figure>
                                                <div class="image">
                                                    <img src="<?= uploadPath($product->image, 'product') ?>"
                                                         alt="<?= htmlspecialchars($product->title) ?>"
                                                         class="img-responsive center-block">
                                                </div>
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
                <div class="col-md-4 col-md-pull-8 col-sm-pull-0 col-xs-pull-0">
              
                        <div class="categories thumbnail" style="    padding: 15px;
    border-radius: 20px;">
                            <h3 style="    color: #fcb03c;">Kategoriler</h3>
                            <ul>
                                <?php if (! empty($categories)): ?>
                                    <?php foreach ($categories as $item): ?>
                                        <li<?= $item->id == $product->categoryId ? ' class="active"' : '' ?>>
                                            <a href="<?= clink(array('@productcategory', $item->slug, $item->id)) ?>">
                                                <?= $item->title ?>
                                            </a>
                                            <?php if (! empty($item->childs)): ?>
                                                <ul class="child">
                                                    <?php foreach ($item->childs as $child): ?>
                                                        <li<?= $child->id == $product->id ? ' class="active"' : '' ?>>
                                                            <a href="<?= clink(array('@product', $child->slug, $child->id)) ?>">
                                                                <?= $child->title ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
</main>