<?php echo $this->utils->alert(); ?>

<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-table"></i> <?php echo $this->moduleTitle ?></div>
    <div class="panel-toolbar clearfix">
        <div class="row">
            <div class="col-md-4">
                <?php if ($this->permission('delete')): ?>
                    <a class="btn btn-sm btn-info checkall" data-toggle="button"><i class="fa fa-check-square-o"></i> Hepsini Seç</a>
                    <a class="btn btn-sm btn-danger deleteall" href="<?php echo $this->module ?>/delete"><i class="fa fa-trash-o"></i></a>
                <?php endif; ?>
                <?php if ($this->permission('insert')): ?>
                    <a class="btn btn-sm btn-success" href="<?php echo $this->module ?>/insert"><i class="fa fa-plus"></i> Yeni Kayıt</a>
                <?php endif; ?>

                <a id="order-update" class="btn btn-sm btn-info hide" href="<?php echo $this->module ?>/order"><i class="fa fa-check-square"></i> Sırayı Güncelle</a>

            </div>
        
        </div>
    </div>
      
        <tbody class="sortable">
       
    <ul class="filtermenu">
	<li data-filter="all">Tümü</li>
<?php foreach ($this->appmodel->getCategories() as $test): ?>
	<li data-filter="<?php echo $test->id ?>"><?php echo $test->title ?></li>
    <?php endforeach; ?>

</ul>

<div class="filtercontainer ">
        <?php foreach ($records as $item): ?>
<div class="post col-md-12 <?php echo $item->categoryId ?>">
<div class="col-md-8">
<tr  data-id="<?php echo $item->id ?>">
            <td class="text-center"><input type="checkbox" class="checkall-item" value="<?php echo $item->id ?>" /></td>
            <td><?php echo $item->title ?></td>
</div>
          <div class="col-md-4 text-right" >
          <td class="text-center"><a class="btn btn-success btn-xs" href="<?php echo $this->module ?>/images/<?php echo $item->id ?>">İçindekiler (<?php echo $item->images ?>)</a></td>
               
               <td class="text-right">
                   <?php if ($this->permission('update')): ?>
                   <a class="btn btn-xs btn-primary" href="<?php echo $this->module ?>/update/<?php echo $item->id ?>"><i class="fa fa-edit"></i></a>
                   <?php endif; ?>
                   <?php if ($this->permission('delete')): ?>
                   <a class="btn btn-xs btn-danger confirm-delete" href="<?php echo $this->module ?>/delete/<?php echo $item->id ?>"><i class="fa fa-trash-o"></i></a>
                   <?php endif; ?>
               </td>
          </div>
        </tr>
        </div>
        <?php endforeach; ?>
                </div>
        </tbody>
 <style>
   input[type="radio"], input[type="checkbox"]{
     position: relative;
     top:3px;
   }
.filtermenu {
  width: 80%;
  margin: 20px auto;
  text-align: center;
}
.filtermenu li {
  border: 1px solid #CCC;
  padding: 4px 12px;
  display: inline-block;
  border-radius: 6px;
  cursor: pointer;
}
.filtermenu li.active {
  background: #CCC;
}

.container {
  width: 1024px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
}

.post {
  margin: 0;
    padding: 10px 0;
    background: white;
    border-bottom: 1px solid #ccc;
}
.post-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}
.post-thumb {
  margin-bottom: 10px;
}
.post-txt {
  font-size: 12px;
}
</style>
<script>

class FilterGallery {

constructor() {
  this.$filtermenuList = $('.filtermenu li');
  this.$container = $('.filtercontainer');

  this.updateMenu('all');
  this.$filtermenuList.on('click', $.proxy(this.onClickFilterMenu, this));
}

onClickFilterMenu(event) {
  const $target = $(event.target);
  const targetFilter = $target.data('filter');

  this.updateMenu(targetFilter);
  this.updateGallery(targetFilter);
}

updateMenu(targetFilter) {
  this.$filtermenuList.removeClass('active');
  this.$filtermenuList.each((index, element) => {
    const targetData = $(element).data('filter');

    if (targetData === targetFilter) {
      $(element).addClass('active');
    }
  });
}

updateGallery(targetFilter) {

  if (targetFilter === 'all') {
    this.$container.fadeOut(300, () => {
      $('.post').show();
      this.$container.fadeIn();
    });
  } else {
    this.$container.find('.post').each((index, element) => {
      this.$container.fadeOut(300, () => {
        if ($(element).hasClass(targetFilter)) {
          $(element).show();
        } else {
          $(element).hide();
        }
        this.$container.fadeIn();
      });
    });
  }
}}


const fliterGallery = new FilterGallery();
</script>
      
    <?php if (! empty($pagination)): ?>
        <div class="panel-footer">
            <?php echo $pagination ?>
        </div>
    <?php endif; ?>
</div>