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
                <li>T-shirts</li>
                <li><a>jacket</a></li>
                <li><a>jeans</a></li>
                <li><a>sweatshirts</a></li>
                <li><a>trousers</a></li>
                <li><a>kitwears</a></li>
                <li><a>accessories</a></li>
              </ul>
            </div>
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
              </div>
              <!--/ End Shop Top -->
            </div>
          </div>
          <div class="row">
            <products :rec="data"></products>
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

  data(){
    return {
      data:{},
    }
  },

  methods: {
    filterdata() {
      var value = $("#dropdown").val();
      // alert(window.location.);
     
          this.data = 'kkc';
          //  console.log(response.data);
    },

    filterdata2() {
      var rec = $("#records").val();
      // alert(window.location.);
 
                this.data = 'kkc';
       
    },
  },
};
</script>

<style>
</style>