<?php foreach ($marketinfolist as $marketlist) {?>
  <li class="dropdown yamm-fw"><a href="#">
    <span>&nbsp;</span><?php echo $marketlist->category_name;?><i class="drop-caret" data-toggle="dropdown"></i></a>
    <ul class="dropdown-menu">
      <li class="yamm-content">
        <div class="row row-eq-height row-col-border">
          <div class="col-md-2">
            <ul class="dropdown-menu-items-list">
              <li>
                <a href="<?php echo site_url('maincontroller/index?id='.$marketlist->subcategory_id); ?>"><?php echo $marketlist->subcategory_name;?></a>
              </li>
            </ul>
          </div>
        </div>
        <img class="dropdown-menu-theme-image" src="<?php echo base_url().'assets/img/fruit_banner.png';?>" alt="Image Alternative text" title="Image Title" />
      </li>
    </ul>
  </li>
<?php }?>
