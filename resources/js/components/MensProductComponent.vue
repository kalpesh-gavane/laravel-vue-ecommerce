<template>
  <div class="row">
    <div v-for="product in products" class="col-xl-3 col-lg-4 col-md-4 col-12">
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
                ><i class="ti-eye"></i><span>Quick Shop</span></a
              >
            </div>
            <div class="product-action-2">
              <a title="Add to cart" href="#">Add to cart</a>
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
    <div id="modal">
      <productmodal :data="viewproductdetail"></productmodal>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    axios.get("http://localhost/laravel/public/products").then((response) => {
      this.products = response.data;
      //  console.log(response.data);
    });
    // let a = 5;
    // let b = 5;
    // console.log(`${a + b}`);
  },
  data() {
    return {
      products: {},
      viewproductdetail: {},
    };
  },
  methods: {
    addproduct(product_id, product_cat_id) {
      axios
        .get(
          "http://localhost/laravel/public/cart/add/" +
            product_id +
            "/" +
            product_cat_id
        )
        .then((response) => {
          //this.products = response.data;
         // console.log(response);
        });
    },

    viewproduct(id) {
      // alert(id);
      axios
        .get("http://localhost/laravel/public/products/" + id)
        .then((response) => {
          //console.log(response.data);
          this.viewproductdetail = response.data;
        });
    },
  },
};
</script>

<style>
</style>