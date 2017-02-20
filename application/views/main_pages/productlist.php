<form method="post" enctype="multiart/form-data" id="productList">
  <div class="global-wrapper clearfix" id="global-wrapper">
    <header class="page-header page-header-banner" style="background-color:#009688;">
      <div class="container">
        <div class="page-header-banner-inner">
          <h1 class="page-title"><?= $listproducts[0]->subcategory_name; ?></h1>
          <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#"><?= $listproducts[0]->category_name;?></a></li>
            <li><a href="#"><?= $listproducts[0]->subcategory_name;?></a></li>
          </ol>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="col-md-9">
        <div class="row" data-gutter="15">
          <?php $this->load->view('navigation/productblock');?>
        </div>
        <?php echo $page_links; ?>
      </div>
    </div>
  </div>
  <div class="gap"></div>
</form>
