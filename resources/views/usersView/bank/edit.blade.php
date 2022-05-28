<div id="edit-card-details" class="accord bg-offwhite mt-3 p-3  shadow">
    <div class="content-edit-area">
        <div class="edit-header">
            <h5 class="title">Update Card</h5>
            <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="edit-content">
            <form id="update-card" method="post">
                <div class="form-group">
                    <label for="edircardNumber">Your Card Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><img class="ml-auto"
                                    src="images/visa.png" alt="visa" title=""></span></div>
                        <input type="text" class="form-control" data-card-form="edircardNumber" id="edircardNumber"
                            disabled value="XXXXXXXXXXXX4623" placeholder="Card Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit-card-holder-name">Card Holder Name</label>
                    <input type="text" class="form-control" data-card-form="edit-card-holder-name"
                        id="edit-card-holder-name" required value="Sohne Due" placeholder="Card Holder Name">
                </div>
                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="edit-expire-name">Expiry Date</label>
                            <input id="edit-expire-name" type="text" class="form-control"
                                data-card-form="edit-expire-name" required value="05/25" placeholder="MM/YY">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="edit-cvv-number">CVV Number <span class="text-info ml-1" data-toggle="tooltip"
                                    data-original-title="For this youre credit the three-digit CVV number is printed on the signature panel on the back of the card immediately after the card's account number."><i
                                        class="fas fa-question-circle"></i></span></label>
                            <input id="edit-cvv-number" type="password" class="form-control"
                                data-card-form="edit-cvv-number" required value="321" placeholder="CVV (3 digits)">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Security question</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Security question">
                        </div>
                    </div>

                </div>

                <button class="btn btn-default d-block">
                    <span>Update Card</span>
                </button>
            </form>
        </div>
    </div>
</div>
