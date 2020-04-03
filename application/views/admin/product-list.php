<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><span class="bread-blod">Product List</span>
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


<div id="item_success_message" class="alert alert-success mt-1 hide container-fluid all-content-wrapper"></div>
<div id="item_error_message" class="alert alert-danger mt-1 hide container-fluid all-content-wrapper"></div>

<div class="product-status mg-tb-15">
    <div class="container-fluid all-content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">


                    <h4>Products List</h4>

                    <div class="add-product">
                        <a href="#" data-toggle="modal" data-target="#Modal_Add">Add Product</a>
                    </div>


                    <table class="table table-bordered table-striped table-responsive" id="mydata">
                        <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Regular Price</th>
                            <th>Large Price</th>
                            <th>Ingredients</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="show_data">

                        </tbody>
                    </table>


                    <!-- MODAL ADD -->

                    <form method="post" enctype='multipart/form-data' id="formAddItem" name="formAddItem">
                        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" name="title" id="title" class="form-control"
                                                       placeholder="Title">
                                                <div id="title_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <input type="text" name="description" id="description"
                                                       class="form-control" placeholder="Description">
                                                <div id="description_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture</label>
                                            <div class="col-md-10">
                                                <input type="file" name="picture" id="picture" class="form-control"
                                                       placeholder="Picture">
                                                <div id="picture_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Price</label>
                                            <div class="col-md-10">
                                                <input type="text" name="price" id="price" class="form-control"
                                                       placeholder="Regular Price">
                                                <div id="price_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="large_price" class="col-md-2 col-form-label">Large Price</label>
                                            <div class="col-md-10">
                                                <input type="text" name="large_price" id="large_price" class="form-control"
                                                       placeholder="Large Price">
                                                <div id="large_price_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <select id="category" name="category"
                                                        class="form-control pro-edt-select form-control-primary">

                                                    <option value="">Select Category</option>

                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= $category["id"] ?>"
                                                            <?php
                                                            if (isset($menuItem[0]['category'])) {
                                                                if ($menuItem[0]['category'] == $category["id"]) {
                                                                    echo 'selected=selected';
                                                                }
                                                            }
                                                            ?> >
                                                            <?php echo $category["category"] ?> </option>
                                                    <?php endforeach; ?>


                                                </select>
                                                <div id="category_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Ingredients</label>
                                            <div class="col-md-10">
                                            <textarea cols="30" rows="4" name="ingredients" id="ingredients" class="form-control"
                                                      placeholder="Ingredients"></textarea>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--END MODAL ADD-->

                    <!-- MODAL EDIT -->
                    <form enctype='multipart/form-data' id="formUpdateItem">
                        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Id</label>
                                            <div class="col-md-10">
                                                <input type="text" name="product_id" id="product_id"
                                                       class="form-control"
                                                       placeholder="Title" readonly>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" name="product_title" id="product_title"
                                                       class="form-control"
                                                       placeholder="Title">
                                                <div id="upd_title_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <input type="text" name="product_description" id="product_description"
                                                       class="form-control" placeholder="Description">
                                                <div id="upd_description_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture</label>
                                            <div class="col-md-10">
                                                <input type="file" name="product_picture" id="product_picture"
                                                       class="form-control"
                                                       placeholder="Picture">
                                                <div id="upd_picture_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Price</label>
                                            <div class="col-md-10">
                                                <input type="text" name="product_price" id="product_price"
                                                       class="form-control"
                                                       placeholder="Price">
                                                <div id="upd_price_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="product_large_price" class="col-md-2 col-form-label">Large Price</label>
                                            <div class="col-md-10">
                                                <input type="text" name="product_large_price" id="product_large_price" class="form-control"
                                                       placeholder="Large Price">
                                                <div id="large_price_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <select id="product_category" name="product_category"
                                                        class="form-control pro-edt-select form-control-primary">

                                                    <option value="">Select Category</option>
                                                    <option value="1">Savory</option>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <option value="<?= $category["id"] ?>"
                                                            <?php
                                                            if (isset($menuItem[0]['category'])) {
                                                                if ($menuItem[0]['category'] == $category["id"]) {
                                                                    echo 'selected=selected';
                                                                }
                                                            }
                                                            ?> >
                                                            <?php echo $category["category"] ?> </option>
                                                    <?php endforeach; ?>


                                                </select>
                                                <div id="upd_category_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Ingredients</label>
                                            <div class="col-md-10">
                                            <textarea cols="30" rows="4" name="product_ingredients" id="product_ingredients" class="form-control"
                                                      placeholder="Ingredients"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" type="submit" id="btn_update" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--END MODAL EDIT-->


                </div>
            </div>
        </div>
    </div>
</div>
        

        