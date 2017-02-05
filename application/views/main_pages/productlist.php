<form method="post" enctype="multiart/form-data" id="productList">
  <div class="global-wrapper clearfix" id="global-wrapper">
    <header class="page-header page-header-banner" style="background-color:#009688;">
      <div class="container">
        <div class="page-header-banner-inner">
          <h1 class="page-title"><?= $subcategory->subcategory_name; ?></h1>
            <ol class="breadcrumb page-breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#"><?= $subcategory->category_name; ?></a></li>
              <li><a href="#"><?= $subcategory->subcategory_name; ?></a></li>
            </ol>
            <!-- <ul class="category-selections clearfix">
              <li>
                <a class="fa fa-th-large category-selections-icon active" href="#"></a>
              </li>
              <li>
                <a class="fa fa-th-list category-selections-icon" href="#"></a>
              </li>
              <li><span class="category-selections-sign">Sort by :</span>
                <select class="category-selections-select">
                  <option selected>Newest First</option>
                  <option>Best Sellers</option>
                  <option>Trending Now</option>
                  <option>Best Raited</option>
                  <option>Price : Lowest First</option>
                  <option>Price : Highest First</option>
                  <option>Title : A - Z</option>
                  <option>Title : Z - A</option>
                </select>
              </li>
                <li><span class="category-selections-sign">Items :</span>
                  <select class="category-selections-select">
                    <option>9 / page</option>
                    <option selected>12 / page</option>
                    <option>18 / page</option>
                    <option>All</option>
                  </select>
                </li>
              </ul> -->
            </div>
          </div>
        </header>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <aside class="category-filters">
                <div class="category-filters-section">
                  <h3 class="widget-title-sm">Category</h3>
                  <ul class="cateogry-filters-list">
                    <li><a href="#">Man's Shoes</a>
                    </li>
                    <li><a href="#">Unisex Clothes, Shoes &amp; Accs</a>
                    </li>
                    <li><a href="#">Kids Clothes, Shoes &amp; Accs</a>
                    </li>
                    <li><a href="#">Woman's Clothing</a>
                    </li>
                    <li><a href="#">Fitness, Running &amp; Yoga</a>
                    </li>
                    <li><a href="#">Team Sports</a>
                    </li>
                    <li><a href="#">Outdoor Sports</a>
                    </li>
                    <li><a href="#">Cycling</a>
                    </li>
                    <li><a href="#">Water Sports</a>
                    </li>
                  </ul>
                </div>
                <div class="category-filters-section">
                    <div class="category-filters-section">
                      <h3 class="widget-title-sm">Brand</h3>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />Adidas<span class="category-filters-amount">(99)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />ASICS<span class="category-filters-amount">(29)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />ECCO<span class="category-filters-amount">(55)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />Skechers<span class="category-filters-amount">(30)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />New Balance<span class="category-filters-amount">(26)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />Nike<span class="category-filters-amount">(71)</span>
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />Timberland<span class="category-filters-amount">(61)</span>
                          </label>
                        </div>
                      </div>
                      <div class="category-filters-section">
                        <h3 class="widget-title-sm">Discount</h3>
                        <div class="checkbox">
                          <label>
                            <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(58)</span>
                          </label>
                        </div>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(83)</span>
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(77)</span>
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(66)</span>
                            </label>
                          </div>
                        </div>
                        <div class="category-filters-section">
                          <h3 class="widget-title-sm">Features</h3>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(89)</span>
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(44)</span>
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(44)</span>
                            </label>
                          </div>
                        </div>
                      </aside>
                    </div>
                    <div class="col-md-9">
                      <div class="row" data-gutter="15">
                        <?php $this->load->view('navigation/productblock');?>
                      </div>
                      <?php echo $page_links; ?>
                      <!-- <div class="row">
                        <div class="col-md-6">
                          <p class="category-pagination-sign">58 items found in Cell Phones. Showing 1 - 12</p>
                        </div> -->
                        <!-- <div class="col-md-6">
                          <nav>
                            <ul class="pagination category-pagination pull-right">
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                          </nav>
                        </div> -->
                      </div>
                    </div>
                </div>
              <div class="gap"></div>
            </div>
        </div>
    </form>
