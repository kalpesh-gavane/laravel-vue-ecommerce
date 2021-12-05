<template>
  <div class="col-lg-2 col-md-3 col-12">
    <div class="right-bar">
      <!-- Search Form -->
      <div class="sinlge-bar">
        <a href="#" class="single-icon"
          ><i class="fa fa-heart-o" aria-hidden="true"></i
        ></a>
      </div>
      <div class="sinlge-bar">
        <a href="#" class="single-icon"
          ><i class="fa fa-user-circle-o" aria-hidden="true"></i
        ></a>
      </div>

      <div class="sinlge-bar shopping">
        <div class="cart-data">
          <a href="#" class="single-icon"
            ><i class="ti-bag"></i>
            <span class="total-count">{{ totalqty }}</span></a
          >
          <!-- Shopping Item -->
          <div class="shopping-item" v-if="showCart">
            <div class="dropdown-cart-header">
              <span>{{ totalitem }} Items</span>
              <a href="#">View Cart</a>
            </div>
            <ul class="shopping-list">
              <li v-for="(cart, index) in carts" v-if="index < 3">
                <div v-if="index < 3">
                  <a
                    class="remove"
                    data-toggle="modal"
                    data-target="#deletemodalpop"
                    title="Remove this item"
                    @click="setdeleteid(cart.id)"
                    ><i class="fa fa-remove"></i
                  ></a>
                  <a class="cart-img" href="#" v-if="index < 3"
                    ><img
                      :src="'http://localhost/laravel/public/images/products/550x750.png'"
                      width="70"
                      height="70"
                      alt="#"
                  /></a>
                  <h4 v-if="index < 3">
                    <a href="#">{{ cart.products.product_name }}</a>
                  </h4>
                  <p v-if="index < 3" class="quantity">
                    {{ cart.qty }}x -
                    <span class="amount"> {{ cart.products.mrp }}</span>
                  </p>
                </div>
              </li>
            </ul>
            <div v-if="carts.length < 4" class="bottom">
              <div class="total">
                <span>Total</span>
                <span class="total-amount">{{ totalamount }}</span>
              </div>
              <a href="checkout.html" class="btn animate">Checkout</a>
            </div>
            <div v-else class="bottom">
              <div class="total">
                <span>Total</span>
                <span class="total-amount">{{ totalamount }}</span>
              </div>
              <a href="checkout.html" class="btn animate">View Cart</a>
            </div>
          </div>
          <!--/ End Shopping Item -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  // props: ["scan"],
  computed: {
    totalqty: function () {
      let total = [];
      Object.entries(this.carts).forEach(([key, val]) => {
        // console.log(val.products);
        total.push(val.qty); // the value of the current key.
      });
      return total.reduce(function (total, num) {
        return total + num;
      }, 0);
    },

    totalamount: function () {
      let total_amount = [];
      Object.entries(this.carts).forEach(([key, val]) => {
        // console.log(val.products);
        total_amount.push(val.sub_total); // the value of the current key.
      });
      return total_amount.reduce(function (total_amount, num) {
        return total_amount + num;
      }, 0);
    },

    totalitem: function () {
      let items = [];
      let item = 0;
      Object.entries(this.carts).forEach(([key, val]) => {
        // console.log(val.products);
        items.push(item); // the value of the current key.
      });
      return items.reduce(function (items, item) {
        return (items += 1);
      }, 0);
    },
  },
  watch: {
    scan() {
      axios.get("http://localhost/laravel/public/cartdata").then((response) => {
        this.carts = response.data;
      });
    },
  },
  data() {
    return {
      carts: {},
      total_amount: 0,
      qty: 1,
      showCart: true,
    };
  },
  created() {
    axios.get("http://localhost/laravel/public/cartdata").then((response) => {
      this.carts = response.data;
    });

    this.$root.$on("newdata", () => {
      axios.get("http://localhost/laravel/public/cartdata").then((response) => {
        this.carts = response.data;
      });
    });
  },
  methods: {
    setdeleteid(delete_id) {
 //     alert(delete_id);
      const btn_value = (document.querySelector("input[id=delete_item_id]").value = delete_id);
    },
  },
};
</script>

<style>
</style>