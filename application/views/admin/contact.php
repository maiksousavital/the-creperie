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

<div class="product-status mg-tb-15">
    <div class="container-fluid all-content-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Messages</h4>



                    <table class="table table-bordered table-striped" id="tableContact">
                        <thead>
                            <tr>
                                <th hidden>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Read</th>
                                <th style="text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="show_messages">



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
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group" hidden>
                        <label for="contact_id" class="col-form-label">Id:</label>
                        <input type="text" class="form-control" id="contact_id" name="contact_id">
                    </div>
                    <div class="form-group">
                        <label for="contact_name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="contact_name" name="contact_name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="contact_email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="contact_email" name="contact_email" readonly>
                    </div>
                    <div class="form-group">
                        <label for="contact_subject" class="col-form-label">Subject:</label>
                        <input type="text" class="form-control" id="contact_subject" name="contact_subject" readonly>
                    </div>
                    <div class="form-group">
                        <label for="contact_message" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="contact_message" name="contact_message" readonly></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_read_message">Mark as Read</button>
            </div>
        </div>
    </div>
</div>
        

        