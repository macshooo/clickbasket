<?php if (isset($marketcat)){
  foreach ($marketcat as $category): ?>
    <li class="dropdown yamm-fw"><a href="#">
      <span>&nbsp;</span><?php echo $category->category_name;?><i class="drop-caret" data-toggle="dropdown"></i></a>
      <ul class="dropdown-menu">
        <li class="yamm-content">
          <div class="row row-eq-height row-col-border">
            <div class="col-md-2">
              <ul class="dropdown-menu-items-list">
                <?php foreach ($marketsubcat as $subcategory):
                  if($subcategory->category_id == $category->category_id){ ?>
                    <li>
                      <a href="<?php echo site_url('listproductscontroller/index?subcategory='.$subcategory->subcategory_id); ?>"><?php echo $subcategory->subcategory_name;?></a>
                    </li>
                  <?php }
                endforeach;?>
              </ul>
            </div>
          </div>
          <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/fruit_banner.png';?>" alt="Image Alternative text" title="Image Title" />
        </li>
      </ul>
    </li>
  <?php endforeach;
}?>
