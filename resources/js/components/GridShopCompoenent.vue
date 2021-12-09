<template>
  <section class="product-area shop-sidebar shop section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-12">
          <div class="shop-sidebar">
            <!-- Single Widget -->
            <div class="single-widget category">
              <h3 class="title">Categories</h3>
              <ul class="categor-list">
                <li><a>T-shirts</a></li>
                <li><a>jacket</a></li>
                <li><a>jeans</a></li>
                <li><a>sweatshirts</a></li>
                <li><a>trousers</a></li>
                <li><a>kitwears</a></li>
                <li><a>accessories</a></li>
              </ul>
            </div>
            <!--/ End Single Widget -->
            <!-- Shop By Price -->
            <!-- <div class="single-widget range">
										<h3 class="title">Shop by Price</h3>
										<div class="price-filter">
											<div class="price-filter-inner">
												<div id="slider-range"></div>
													<div class="price_slider_amount">
													<div class="label-input">
														<span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
													</div>
												</div>
											</div>
										</div>
										<ul class="check-box-list">
											<li>
												<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
											</li>
											<li>
												<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
											</li>
										</ul>
									</div> -->
            <!--/ End Shop By Price -->
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="row">
            <div class="col-12">
              <!-- Shop Top -->
              <div class="shop-top">
                <div class="shop-shorter">
                  <div class="single-shorter">
                    <label>Show :</label>
                    <select @change="filterdata2()" id="records">
                      <option selected="selected" value="3">3</option>
                      <option value="5">5</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                  <div class="single-shorter">
                    <label>Sort By :</label>
                    <select @change="filterdata()" id="dropdown">
                      <option selected="selected" value="product_name">
                        Name
                      </option>
                      <option value="mrp">Price</option>
                      <option value="mrp">Size</option>
                    </select>
                  </div>
                </div>
                <ul class="view-mode">
                  <li class="active">
                    <a href="shop-grid.html"><i class="fa fa-th-large"></i></a>
                  </li>
                </ul>
              </div>
              <!--/ End Shop Top -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12" v-for="product in products">
              <div class="single-product">
                <div class="product-img">
                  <a href="product-details.html">
                    <img
                      class="default-img"
                      src="https://via.placeholder.com/550x750"
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
                      <!-- <a title="Add to cart">Add to cart</a> -->
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <h3>
                    <a href="product-details.html">{{
                      product.product_name
                    }}</a>
                  </h3>
                  <div class="product-price">
                    <span>$29.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      products: {},
    };
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

  created() {
    axios
      .get("http://localhost/laravel/public/api/garmentproducts/1")
      .then((response) => {
        this.products = response.data;
        //  console.log(response.data);
      });
  },

  methods: {
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

    filterdata() {
      var value = $("#dropdown").val();
      // alert(window.location.);
      axios
        .get(`http://localhost/laravelVueEcommerce/public/api/data/${value}`)
        .then((response) => {
          this.products = response.data;
          //  console.log(response.data);
        });
    },

    filterdata2() {
      var rec = $("#records").val();
      // alert(window.location.);
      axios
        .get(`http://localhost/laravelVueEcommerce/public/api/data2/${rec}`)
        .then((response) => {
          this.products = response.data;
          //  console.log(response.data);
        });
    },
  },
};
</script>

<style>
</style>