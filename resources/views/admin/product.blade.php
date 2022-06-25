<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');

    <style>
        .div_center
        {
            text-align: center;
            padding-top: 40px;

        }

        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_color
        {
            color: black;
        }

        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>

                    <div>
                        <label>Product Name</label>
                        <input class="input_color" type="text" name="productname" placeholder="Input Product Name">
                    </div>
                    <div>
                        <label>Product Price</label>
                        <input class="input_color" type="number" name="productprice" placeholder="Input Product Name">
                    </div>
                    <div>
                        <label>Product Category</label>
                        <select class="input_color" name="productcategory">
                            <option>shirt</option>
                        </select>
                    </div>
                    <div>
                        <label>Product Availability</label>
                        <input class="input_color" type="number" min="0" name="productavailability" placeholder="Input Product Name">
                    </div>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>
