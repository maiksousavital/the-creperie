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
                                <li><span class="bread-blod">About</span>
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

<div id="about_success_message" class="alert alert-success mt-1 hide container-fluid all-content-wrapper"></div>
<div id="about_error_message" class="alert alert-danger mt-1 hide container-fluid all-content-wrapper"></div>

<div class="product-status mg-tb-15">
    <div class="container-fluid all-content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="product-status-wrap">
                    <h4>About</h4>
                    <br class="mb-4">

                    <div class="add-product">
                        <a href="#" data-toggle="modal" data-target="#Modal_Add">Add About</a>
                    </div>

                    <table class="table table-bordered table-striped" id="tableAbout">
                        <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Picture 1</th>
                            <th>Picture 2</th>
                            <th>About</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="show_about">



                        </tbody>
                    </table>



                    <!-- MODAL ADD -->

                    <form method="post" enctype='multipart/form-data' id="formAbout" name="formAbout">
                        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add About</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture 1</label>
                                            <div class="col-md-8">
                                                <input type='file' name='picture_1' id="picture_1" multiple> <br/><br/>
                                                <div id="picture_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture 2</label>
                                            <div class="col-md-8">
                                                <input type='file' name='picture_2' id="picture_2"> <br/><br/>
                                                <div id="picture2_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">About</label>
                                            <div class="col-md-8">
                                                <textarea cols="30" rows="4" name="about" id="about" class="form-control"
                                                placeholder="About"></textarea>
                                                <div id="about_text_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" type="submit" id="btn_save_about" class="btn btn-primary">Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--END MODAL ADD-->

                    <!-- MODAL EDIT -->
                    <form enctype='multipart/form-data' id="formUpdateAbout">
                        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit About</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Id</label>
                                            <div class="col-md-10">
                                                <input type="text" name="about_id" id="about_id"
                                                       class="form-control"
                                                        readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture 1</label>
                                            <div class="col-md-8">
                                                <input type='file' name='picture_1' id="picture_1" multiple> <br/><br/>
                                                <div id="upd_about_picture_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Picture 2</label>
                                            <div class="col-md-8">
                                                <input type='file' name='picture_2' id="picture_2"> <br/><br/>
                                                <div id="upd_about_picture2_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">About</label>
                                            <div class="col-md-8">
                                                <textarea cols="30" rows="4" name="about_about" id="about_about" class="form-control"
                                                          placeholder="About"></textarea>
                                                <div id="about_text_warning_message" class="alert alert-warning mt-1 hide"></div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" type="submit" id="btn_update_about" class="btn btn-primary">
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