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
                                <li><span class="bread-blod">Home</span>
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


<div id="home_success_message" class="alert alert-success mt-1 hide container-fluid all-content-wrapper"></div>
<div id="home_error_message" class="alert alert-danger mt-1 hide container-fluid all-content-wrapper"></div>



<div class="product-status mg-tb-15">
    <div class="container-fluid all-content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Home</h4>
                    <br class="mb-4">

                    <div class="add-product">
                        <a href="#" data-toggle="modal" data-target="#Modal_Add">Add Video Home</a>
                    </div>

                    <table class="table table-bordered table-striped" id="tableHome">
                        <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Video</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="show_home">



                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>



<!-- MODAL ADD -->
<form method="post" enctype='multipart/form-data' id="formHome" name="formHome">
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Home Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Video</label>
                        <div class="col-md-8">
                            <input type='file' id="video" name='video'> <br/><br/>
                            <div id="video_home_warning_message" class="alert alert-warning mt-1 hide"></div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                    <button type="button" type="submit" id="btn_save_video" class="btn btn-primary">Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--END MODAL ADD-->
                

      