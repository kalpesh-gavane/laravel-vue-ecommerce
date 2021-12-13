<template>
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
                    'countdown' + product.product_id + ' count quantityinput'
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
            <a href="product-details.html">{{ product.product_name }}</a>
          </h3>
          <div class="product-price">
            <span>$29.00</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props:['rec'],
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

  watch: {
    rec: function () {
      axios
      .get("http://localhost/laravelVueEcommerce/public/api/data2/1")
      .then((response) => {
        this.products = response.data;
        //  console.log(response.data);
      });
    },
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

 
  },
};
</script>

<style>
</style>