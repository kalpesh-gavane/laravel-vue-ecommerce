<template>
  <div>
    <!-- <div id="modal">
      <cartcom :scan="editrecord"></cartcom>
    </div> -->

    <!-- Slider Area -->
    <section class="hero-slider">
      <!-- Single Slider -->
      <div class="single-slider">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-9 offset-lg-3 col-12">
              <div class="text-inner">
                <div class="row">
                  <div class="col-lg-7 col-12">
                    <div class="hero-text">
                      <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                      <p>
                        Maboriosam in a nesciung eget magnae <br />
                        dapibus disting tloctio in the find it pereri <br />
                        odiy maboriosm.
                      </p>
                      <div class="button">
                        <a href="#" class="btn">Shop Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->

    <!-- Start Small Banner  -->
    <section class="small-banner section">
      <div class="container-fluid">
        <div class="row">
          <!-- Single Banner  -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-banner">
              <img src="https://via.placeholder.com/600x370" alt="#" />
              <div class="content">
                <p>Man's Collectons</p>
                <h3>
                  Summer travel <br />
                  collection
                </h3>
                <a href="#">Discover Now</a>
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
          <!-- Single Banner  -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-banner">
              <img src="https://via.placeholder.com/600x370" alt="#" />
              <div class="content">
                <p>Bag Collectons</p>
                <h3>
                  Awesome Bag <br />
                  2020
                </h3>
                <a href="#">Shop Now</a>
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
          <!-- Single Banner  -->
          <div class="col-lg-4 col-12">
            <div class="single-banner tab-height">
              <img src="https://via.placeholder.com/600x370" alt="#" />
              <div class="content">
                <p>Flash Sale</p>
                <h3>
                  Mid Season <br />
                  Up to <span>40%</span> Off
                </h3>
                <a href="#">Discover Now</a>
              </div>
            </div>
          </div>
          <!-- /End Single Banner  -->
        </div>
      </div>
    </section>
    <!-- End Small Banner -->

    <!-- Start Product Area -->
    <div class="product-area section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              <div class="nav-main">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      data-toggle="tab"
                      href="#man"
                      role="tab"
                      >Man</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      data-toggle="tab"
                      href="#women"
                      role="tab"
                      >Woman</a
                    >
                  </li>
                </ul>
                <!--/ End Tab Nav -->
              </div>
              <div class="tab-content" id="myTabContent">
                <!-- Start Single Tab -->
                <div class="tab-pane fade show active" id="man" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">
                      <div
                        v-for="product in products"
                        class="col-xl-3 col-lg-4 col-md-4 col-12"
                      >
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img
                                class="default-img"
                                src="http://localhost/laravel/public/images/products/550x750.png"
                                alt="#"
                              />
                              <img
                                class="hover-img"
                                src="https://via.placeholder.com/550x750"
                                alt="#"
                              />
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a
                                  @click="viewproduct(product.product_id)"
                                  data-toggle="modal"
                                  data-target="#product_detail_modal"
                                  title="Quick View"
                                  href="#"
                                  ><i class="ti-eye"></i
                                  ><span>Quick Shop</span></a
                                >

                                <div class="qty mt-5">
                                  <button
                                    @click="
                                      updateqty(
                                        product.product_id,
                                        product.product_cat_id,
                                        'minus'
                                      )
                                    "
                                    class="minus bg-dark"
                                  >
                                    -
                                  </button>
                                  <input
                                    type="text"
                                    disabled="true"
                                    :class="
                                      'countdown' +
                                      product.product_id +
                                      ' count quantityinput'
                                    "
                                    value="0"
                                    minlength="1"
                                    maxlength="2"
                                    :min="product.min_qty"
                                    :max="product.max_qty"
                                  />
                                  <button
                                    @click="
                                      updateqty(
                                        product.product_id,
                                        product.product_cat_id,
                                        'add',
                                        product.max_qty
                                      )
                                    "
                                    class="plus bg-dark"
                                  >
                                    +
                                  </button>
                                </div>
                              </div>
                              <div class="product-action-2">
                                <!-- <a title="Add to cart" href="#">Add to cart</a> -->
                              </div>
                            </div>
                          </div>
                          <div class="product-content">
                            <h3>
                              <a href="#">{{ product.product_name }}</a>
                            </h3>
                            <div class="product-price">
                              <span>$ {{ product.mrp }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Start Single Tab -->
                <div class="tab-pane fade" id="women" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">
                      <div
                        v-for="wproduct in women_products"
                        class="col-xl-3 col-lg-4 col-md-4 col-12"
                      >
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img
                                class="default-img"
                                src="http://localhost/laravel/public/images/products/550x750.png"
                                alt="#"
                              />
                              <img
                                class="hover-img"
                                src="https://via.placeholder.com/550x750"
                                alt="#"
                              />
                            </a>
                            <div class="button-head">
                               <div class="product-action">
                                <a
                                  @click="viewproduct(wproduct.product_id)"
                                  data-toggle="modal"
                                  data-target="#product_detail_modal"
                                  title="Quick View"
                                  href="#"
                                  ><i class="ti-eye"></i
                                  ><span>Quick Shop</span></a
                                >

                                <div class="qty mt-5">
                                  <button
                                    @click="
                                      updateqty(
                                        wproduct.product_id,
                                        wproduct.product_cat_id,
                                        'minus'
                                      )
                                    "
                                    class="minus bg-dark"
                                  >
                                    -
                                  </button>
                                  <input
                                    type="text"
                                    disabled="true"
                                    :class="
                                      'countdown' +
                                      wproduct.product_id +
                                      ' count quantityinput'
                                    "
                                    value="0"
                                    minlength="1"
                                    maxlength="2"
                                    :min="wproduct.min_qty"
                                    :max="wproduct.max_qty"
                                  />
                                  <button
                                    @click="
                                      updateqty(
                                        wproduct.product_id,
                                        wproduct.product_cat_id,
                                        'add',
                                        wproduct.max_qty
                                      )
                                    "
                                    class="plus bg-dark"
                                  >
                                    +
                                  </button>
                                </div>
                              </div>
                              <div class="product-action-2">
                                <a title="Add to cart" href="#">Add to cart</a>
                              </div>
                            </div>
                          </div>
                          <div class="product-content">
                            <h3>
                              <a href="#">{{ wproduct.product_name }}</a>
                            </h3>
                            <div class="product-price">
                              <span>$ {{ wproduct.mrp }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ End Single Tab -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="row">
              <div class="col-12">
                <div class="shop-section-title">
                  <h1>On sale</h1>
                </div>
              </div>
            </div>
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h4 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h4>
                    <p class="price with-discount">$59</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$44</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$89</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="row">
              <div class="col-12">
                <div class="shop-section-title">
                  <h1>Best Seller</h1>
                </div>
              </div>
            </div>
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$65</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$33</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$77</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="row">
              <div class="col-12">
                <div class="shop-section-title">
                  <h1>Top viewed</h1>
                </div>
              </div>
            </div>
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$22</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$35</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
            <!-- Start Single List  -->
            <div class="single-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                  <div class="list-image overlay">
                    <img src="https://via.placeholder.com/115x140" alt="#" />
                    <a href="#" class="buy"
                      ><i class="fa fa-shopping-bag"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 no-padding">
                  <div class="content">
                    <h5 class="title">
                      <a href="#">Licity jelly leg flat Sandals</a>
                    </h5>
                    <p class="price with-discount">$99</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single List  -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Home List  -->

    <!-- Start Cowndown Area -->
    <section class="cown-down">
      <div class="section-inner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-12 padding-right">
              <div class="image">
                <img src="https://via.placeholder.com/750x590" alt="#" />
              </div>
            </div>
            <div class="col-lg-6 col-12 padding-left">
              <div class="content">
                <div class="heading-block">
                  <p class="small-title">Deal of day</p>
                  <h3 class="title">Beatutyful dress for women</h3>
                  <p class="text">
                    Suspendisse massa leo, vestibulum cursus nulla sit amet,
                    frungilla placerat lorem. Cars fermentum, sapien.
                  </p>
                  <h1 class="price">$1200 <s>$1890</s></h1>
                  <div class="coming-time">
                    <div class="clearfix" data-countdown="2021/02/30"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /End Cowndown Area -->

    <!-- Start Shop Blog  -->
    <section class="shop-blog section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>From Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Blog  -->
            <div class="shop-single-blog">
              <img src="https://via.placeholder.com/370x300" alt="#" />
              <div class="content">
                <p class="date">22 July , 2020. Monday</p>
                <a href="#" class="title">Sed adipiscing ornare.</a>
                <a href="#" class="more-btn">Continue Reading</a>
              </div>
            </div>
            <!-- End Single Blog  -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Blog  -->
            <div class="shop-single-blog">
              <img src="https://via.placeholder.com/370x300" alt="#" />
              <div class="content">
                <p class="date">22 July, 2020. Monday</p>
                <a href="#" class="title">Man’s Fashion Winter Sale</a>
                <a href="#" class="more-btn">Continue Reading</a>
              </div>
            </div>
            <!-- End Single Blog  -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Blog  -->
            <div class="shop-single-blog">
              <img src="https://via.placeholder.com/370x300" alt="#" />
              <div class="content">
                <p class="date">22 July, 2020. Monday</p>
                <a href="#" class="title">Women Fashion Festive</a>
                <a href="#" class="more-btn">Continue Reading</a>
              </div>
            </div>
            <!-- End Single Blog  -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Blog  -->

    <!-- delete Modal -->
    <div class="modal fade" id="deletemodalpop" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Remove Item from Cart
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <input type="hidden" id="id" />
            <h5>Are You Sure Want To Remove This Product?</h5>
          </div>

          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <input type="hidden" id="delete_item_id" />
            <button
              type="submit"
              id="yes_delete_item"
              value="Yes-Delete"
              data-dismiss="modal"
              aria-label="Close"
              class="btn btn-danger"
              @click="deleteitem"
            >
              Yes, Delete
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- end delete Modal -->

    <!-- product Detail modal  -->
    <div class="modal fade" id="product_detail_modal" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span class="ti-close" aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row no-gutters">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="quickview-content">
                  <h2>
                    <!-- <input type="text" readonly v-model="" /> -->
                    {{ viewproductdetail.product_name }}
                  </h2>
                  <div class="quickview-ratting-review">
                    <div class="quickview-stock">
                      <span><i class="fa fa-check-circle-o"></i> in stock</span>
                    </div>
                  </div>
                  <h3>
                    {{ viewproductdetail.mrp }}
                    <!-- <input type="text" readonly v-model="data.mrp" /> -->
                  </h3>
                  <div class="quickview-peragraph">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Mollitia iste laborum ad impedit pariatur esse optio
                      tempora sint ullam autem deleniti nam in quos qui nemo
                      ipsum numquam.
                    </p>
                  </div>
                  <div class="size">
                    <div class="row">
                      <div class="col-lg-6 col-12">
                        <h5 class="title">Size</h5>
                        <select>
                          <option v-for="variant in viewproductdetail.variants">
                            {{ variant.size }}
                          </option>
                        </select>
                      </div>
                      <div class="col-lg-6 col-12">
                        <h5 class="title">Color</h5>
                        <select>
                          <option v-for="variant in viewproductdetail.variants">
                            {{ variant.color }}
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="quantity">
                    <!-- Input Order -->
                    <div class="input-group">
                      <div class="button minus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          data-type="minus"
                          data-field="quant[1]"
                        >
                          <i class="ti-minus"></i>
                        </button>
                      </div>
                      <input
                        type="number"
                        v-bind:id="quantityname(viewproductdetail.product_id)"
                        class="input-number3"
                        minlength="1"
                        maxlength="4"
                        value="1"
                        min="1"
                        max="4"
                      />
                      <div class="button plus">
                        <button
                          type="button"
                          class="btn btn-primary btn-number"
                          data-type="plus"
                          data-field="quant[1]"
                        >
                          <i class="ti-plus"></i>
                        </button>
                      </div>
                    </div>
                    <!--/ End Input Order -->
                  </div>
                  <div
                    v-bind:id="btnId(viewproductdetail.product_id)"
                    v-show="add_to_cart_btn"
                    class="add-to-cart"
                  >
                    <a
                      @click="
                        addproduct(
                          viewproductdetail.product_id,
                          viewproductdetail.product_cat_id
                        )
                      "
                      class="btn"
                      >Add to cart</a
                    >
                    <a href="#" class="btn min"><i class="ti-heart"></i></a>
                    <a href="#" class="btn min"
                      ><i class="fa fa-compress"></i
                    ></a>
                  </div>
                  <div class="default-social">
                    <h4 class="share-now">Share:</h4>
                    <ul>
                      <li>
                        <a class="facebook" href="#"
                          ><i class="fa fa-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a class="twitter" href="#"
                          ><i class="fa fa-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a class="youtube" href="#"
                          ><i class="fa fa-pinterest-p"></i
                        ></a>
                      </li>
                      <li>
                        <a class="dribbble" href="#"
                          ><i class="fa fa-google-plus"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--product Detail modal -->

    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-rocket"></i>
              <h4>Free shiping</h4>
              <p>Orders over $100</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-reload"></i>
              <h4>Free Return</h4>
              <p>Within 30 days returns</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-lock"></i>
              <h4>Sucure Payment</h4>
              <p>100% secure payment</p>
            </div>
            <!-- End Single Service -->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Start Single Service -->
            <div class="single-service">
              <i class="ti-tag"></i>
              <h4>Best Peice</h4>
              <p>Guaranteed price</p>
            </div>
            <!-- End Single Service -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Shop Services Area -->
  </div>
</template>

<script>
//Vue.component("cartcom", require("./HeaderComponent.vue").default);
import Header from "./HeaderComponent.vue";
export default {
  components: {
    Header,
  },
  created() {
    axios
      .get("http://localhost/laravel/public/api/garmentproducts/1")
      .then((response) => {
        this.products = response.data;
        //  console.log(response.data);
      });

    axios
      .get("http://localhost/laravel/public/api/garmentproducts/3")
      .then((response) => {
        this.women_products = response.data;
        // console.log(response.data);
      });

    //  $(".quantityinput").prop("disabled", true);
  },

  mounted() {
    axios.get("http://localhost/laravel/public/cartdata").then((response) => {
      let arr = [];

      response.data.forEach((value, index) => {
        // $(`.countdown${value.product_id}`).val(parseInt(5));
        $(`.countdown${value.product_id}`).val(
          parseInt($(`.countdown${value.product_id}`).val()) + value.qty
        );
        arr.push(value);
        //  alert($(`.countdown${value.product_id}`).val());
      });
    });
  },

  data() {
    return {
      products: {},
      editrecord: {},
      carts: {},
      add_to_cart_btn: true,
      women_products: {},

      viewproductdetail: {},
    };
  },

  methods: {
    deleteitem() {
      const delete_id = document.querySelector(
        "input[id=delete_item_id]"
      ).value;

      axios
        .get("http://localhost/laravel/public/delete/item/" + delete_id)
        .then((response) => {
          this.$root.$emit("newdata");

          this.$toaster.error("Item Removed From Cart.");
        });
    },

    quantityname(product_id) {
      return "quantity-" + product_id;
    },
    btnId(product_id) {
      return "btn-" + product_id;
    },
    addproduct(product_id, product_cat_id, qty) {
      axios
        .get(
          "http://localhost/laravel/public/cart/add/" +
            product_id +
            "/" +
            product_cat_id +
            "/" +
            qty
        )
        .then((response) => {
          // alert("watch");
          // this.editrecord = response.data;
          this.carts = response.data;
          this.$toaster.success("Item Added To Cart.");
        });
    },

    viewproduct(id) {
      // alert(id);
      axios
        .get("http://localhost/laravel/public/products/" + id)
        .then((response) => {
          //console.log(response.data);
          this.viewproductdetail = response.data;

          // document.querySelector("div[id=btn-" + product_id + "]").style.display = 'none';
        });
    },

    updateqty(product_id, product_cat_id, type, max_qty, min_qty) {
      // alert(type);
      if (type == "add") {
        if ($(`.countdown${product_id}`).val() >= max_qty) {
          this.$toaster.error("You Reached Max Qty");
        } else {
          $(`.countdown${product_id}`).val(
            parseInt($(`.countdown${product_id}`).val()) + 1
          );
          let quantity = $(`.countdown${product_id}`).val();
          axios
            .get(
              "http://localhost/laravel/public/cart/add/" +
                product_id +
                "/" +
                product_cat_id +
                "/" +
                quantity
            )
            .then((response) => {
              //  alert("watch");
              // this.carts = response.data;
              this.$root.$emit("newdata");
              // console.log(response.data);
              // $("#cart_data").reload("#cart_data");
              this.$toaster.success("Item Added To Cart.");
            });
        }
      } else {
        if ($(`.countdown${product_id}`).val() <= 1) {
          axios
            .get("http://localhost/laravel/public/delete/product/" + product_id)
            .then((response) => {
              this.$root.$emit("newdata");
              $(`.countdown${product_id}`).val(
                parseInt($(`.countdown${product_id}`).val()) - 1
              );
              this.$toaster.error("Item Removed From Cart.");
            });
        } else {
          $(`.countdown${product_id}`).val(
            parseInt($(`.countdown${product_id}`).val()) - 1
          );

          let quantity = $(`.countdown${product_id}`).val();

          axios
            .get(
              "http://localhost/laravel/public/cart/add/" +
                product_id +
                "/" +
                product_cat_id +
                "/" +
                quantity
            )
            .then((response) => {
              this.$root.$emit("newdata");
              this.$toaster.error("Item Removed From Cart.");
            });
        }
      }

      // alert(this.total_quantity);
    },
  },
};

$(document).ready(function () {
  $(".count").prop("disabled", true);
});
</script>

<style>
.qty .count {
  color: #000;
  display: inline-block;
  vertical-align: top;
  font-size: 25px;
  font-weight: 700;
  line-height: 30px;
  padding: 0 2px;
  min-width: 35px;
  text-align: center;
}
.qty .plus {
  cursor: pointer;
  display: inline-block;
  vertical-align: top;
  color: white;
  width: 30px;
  height: 30px;
  font: 30px/1 Arial, sans-serif;
  text-align: center;
  border-radius: 50%;
}
.qty .minus {
  cursor: pointer;
  display: inline-block;
  vertical-align: top;
  color: white;
  width: 30px;
  height: 30px;
  font: 30px/1 Arial, sans-serif;
  text-align: center;
  border-radius: 50%;
  background-clip: padding-box;
}
div {
  text-align: center;
}
.minus:hover {
  background-color: #717fe0 !important;
}
.plus:hover {
  background-color: #717fe0 !important;
}
/*Prevent text selection*/
span {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
input {
  border: 0;
  width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input:disabled {
  background-color: white;
}
</style>