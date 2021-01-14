
<?php include 'header.php' ?>



   <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">ViewProducts</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item">
                  <a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">ViewProducts</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
<!-- table display -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product Parent Name</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Product Availability</th>
                        <th>Product Launch Date</th>
                        <th>Monthly Price</th>
                        <th>Annual price</th>
                        <th>SKU</th>
                        <th>Webspace</th>
                        <th>Bandwidth</th>
                        <th>Free Domain</th>
                        <th>Language Technology</th>
                        <th>MailBox</th>
                        <th>Action</th>
                    </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
<!-- table display -->

<div class="col-md-12">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalSignUp" 
    tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" 
    aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                <button type="button" class="close" 
                data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                    <h1 class="mb-0">Update Product</h1>
                    <div class="mb-0">Product Details </div>
                      <small class="important-field"> * Mandatory Fields</small>
                    </div>
                  </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row pr-3">
                    <div class="form-group col-lg-6">
                      <label for="inputState">Select Product Category
                      <span class="important-field"> *</span></label>
                      <!-- <select id="inputState" class="form-control" 
                      name="productcategory">
                        <option value="Please select">Please select</option>
                        <?php
                        // $data=$product->getSubCategoryNav();
                        // if ($data!=false) {
                        //     for ($i=0;$i<count($data);$i++) {
                        //         echo '<option value="'.$data[$i]['id'].'">'.
                        //         $data[$i]['prod_name'].'</option>';
                        //     }
                        // }
                        ?> -->
                      </select>
                      <div class="invalid-feedback">
                        Please Select a Product Category.
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="productname">
                        Enter Product Name<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="productname" 
                        class="form-control" placeholder="product Name" n
                        ame="productname">
                        <div class="invalid-feedback">
                          Please provide a valid Product Name.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="pageurl">Page URL</label>
                        <input type="text" id="pageurl" 
                        class="form-control" placeholder="Page URL" name="pageurl">
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Product Description</h1>
                          <div class="mb-0">Enter Product Description Below </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="monthlyprice">
                        Enter Monthly Price<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="monthlyprice"
                         class="form-control" placeholder="Monthly Price"
                          name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="annualprice">Enter Annual Price<span 
                        class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" 
                        class="form-control" placeholder="Annual Price" 
                        name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>  
                    </div>   
                    <div class="row pr-3 pl-3">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" 
                          for="sku">SKU<span class="important-field"> 
                          *</span></label>
                          <input type="text" id="sku" 
                          class="form-control" placeholder="SKU" name="sku">
                          <div class="invalid-feedback">
                            Please Enter valid SKU.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Features</h1>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3 pl-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="webspace">Web Space(in GB)<span 
                        class="important-field"> *</span></label>
                        <input type="text" id="webspace" 
                        class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="bandwidth">
                        Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" 
                        class="form-control" placeholder="Bandwidth" 
                        name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>  
                <div class="row pr-3 pl-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" 
                      for="freedomain">Free Domain<span 
                      class="important-field"> *</span> </label>
                      <input type="text" id="freedomain" 
                      class="form-control" placeholder="Free Domain" 
                      name="freedomain">
                      <small class="text-muted">
                      Enter 0 if no domain available in this service</small>
                      <div class="invalid-feedback">
                        Please Enter Valid Free Domain.
                      </div>
                    </div>
                  </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="languagetechnology">Language/ Technology Support
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="languagetechnology" 
                    class="form-control" placeholder="Language or 
                    Technology Support" name="languagetechnology">
                    <small class="text-muted">Separate by (,) 
                    Ex: PHP, MySQL, MongoDB</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Language or Technology Support.
                    </div>
                  </div>
                </div>
              </div>
              <div class="row pr-3 pl-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="mailbox">Mailbox
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="mailbox" 
                    class="form-control" placeholder="Mailbox" name="mailbox">
                    <small class="text-muted">Enter 
                    Number of mailbox will be provided, enter 0 if none</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Number of Mailbox.
                    </div>
                  </div>
                </div>
              </div>
            <div class="text-center pb-4">
            <input type="hidden" id="id" class="form-control"  name="id">
            <button type="button" 
            class="btn btn-danger mt-4" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary mt-4" 
              id="createcategory" value="Update Product" name="submit" disabled="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
      showProduct();
    });
    function showProduct(){
          $('#showProduct').DataTable( {
              "ajax": "adminhelper.php?showproducts="
          } ); 
    }
 
  </script>