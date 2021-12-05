<template>
  <div class="cart-data">
    <a href="#" class="single-icon" @click="showCart = !showCart"
      ><i class="ti-bag"></i> <span class="total-count">{{ totalqty }}</span></a
    >
    <!-- Shopping Item -->
    <div class="shopping-item" v-if="showCart">
      <div class="dropdown-cart-header">
        <span>{{ totalitem }} Items</span>
        <a href="#">View Cart</a>
      </div>
      <ul class="shopping-list">
        <li v-for="cart in carts">
          <a href="#" class="remove" title="Remove this item"
            ><i class="fa fa-remove"></i
          ></a>
          <a class="cart-img" href="#"
            ><img
              :src="'http://localhost/laravel/public/images/products/550x750.png'"
              width="70"
              height="70"
              alt="#"
          /></a>
          <h4>
            <a href="#">{{ cart.products.product_name }}</a>
          </h4>
          <p class="quantity">
            {{ cart.qty }}x -
            <span class="amount"> {{ cart.products.mrp }}</span>
          </p>
        </li>
      </ul>
      <div class="bottom">
        <div class="total">
          <span>Total</span>
          <span class="total-amount">{{ totalamount }}</span>
        </div>
        <a href="checkout.html" class="btn animate">Checkout</a>
      </div>
    </div>
    <!--/ End Shopping Item -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      carts: {},
      total_amount: 0,
      showCart: true,
    };
  },
  created() {
    axios.get("http://localhost/laravel/public/cartdata").then((response) => {
      this.carts = response.data;
    });
  },
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
  methods: {},
};
</script>

<style>
</style>