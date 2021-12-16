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
                <li><a href="#">T-shirts</a></li>
                <li><a href="#">jacket</a></li>
                <li><a href="#">jeans</a></li>
                <li><a href="#">sweatshirts</a></li>
                <li><a href="#">trousers</a></li>
                <li><a href="#">kitwears</a></li>
                <li><a href="#">accessories</a></li>
              </ul>
            </div>
            <!--/ End Single Widget -->
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12" v-for="product in products">
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
import products from "./Products.vue";

export default {
  components: {
    products,
  },

  created() {
    axios
      .get("http://localhost/laravel/public/api/garmentproducts/1")
      .then((response) => {
        this.products = response.data;
        //  console.log(response.data);
      });
  },

  data() {
    return {
      products: {},
    };
  },

  methods: {
    filterdata() {
      var value = $("#dropdown").val();
      // alert(window.location.);
      axios
        .get(`http://localhost/laravelVueEcommerce/public/api/data/${value}`)
        .then((response) => {
          this.products = response.data;

          this.data = "kkc";
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

      //this.data = "kkc";
    },
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
};
</script>

<style>
.demo {
  font-family: sans-serif;
  border: 1px solid #eee;
  border-radius: 2px;
  padding: 20px 30px;
  margin-top: 1em;
  margin-bottom: 40px;
  user-select: none;
  overflow-x: auto;
}

.tab-button {
  padding: 6px 10px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border: 1px solid #ccc;
  cursor: pointer;
  background: #f0f0f0;
  margin-bottom: -1px;
  margin-right: -1px;
}
.tab-button:hover {
  background: #e0e0e0;
}
.tab-button.active {
  background: #e0e0e0;
}
.demo-tab {
  border: 1px solid #ccc;
  padding: 10px;
}
</style>