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
                                <li><span class="bread-blod">Review/span>
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


                    <h4>Review</h4>

                    <table class="table table-bordered table-striped" id="tableReview">
                        <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Review</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="show_reviews">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" hidden>
                        <label for="review_id" class="col-form-label">Id:</label>
                        <input type="text" class="form-control" id="review_id" name="review_id">
                    </div>
                    <div class="form-group">
                        <label for="review_name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="review_name" name="review_name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="review_email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="review_email" name="review_email" readonly>
                    </div>
                    <div class="form-group">
                        <label for="review_message" class="col-form-label">Review:</label>
                        <textarea class="form-control" id="review_message" name="review_message" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="review_rating" class="col-form-label">Rating:</label>
                        <input type="text" class="form-control" id="review_rating" name="review_rating" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_approve">Approve Review</button>
            </div>
        </div>
    </div>
</div>
