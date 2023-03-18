<html>
    <body>
    <h2>Create Invoice</h2>

<form method="post" action="/invoice/create">
{{ csrf_field() }}
   
    <div class="form-group row">
        <label for="custName" class="col-sm-3 col-form-label">Customer Name</label>
        <div class="col-sm-9">
            <input name="custName" type="text" class="form-control" id="custName" placeholder="customer Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="custCompany" class="col-sm-3 col-form-label">Customer Company</label>
        <div class="col-sm-9">
            <input name="custCompany" type="text" class="form-control" id="custCompany"
                   placeholder="Customer Company">
        </div>
    </div>
    <div class="form-group row">
        <label for="custAddress" class="col-sm-3 col-form-label">Customer Address</label>
        <div class="col-sm-9">
            <input name="custAddress" type="text" class="form-control" id="custAddress"
                   placeholder="Customer Address">
        </div>
    </div>
    <div class="form-group row">
        <label for="custPhone" class="col-sm-3 col-form-label">Customer Phone</label>
        <div class="col-sm-9">
            <input name="custPhone" type="text" class="form-control" id="custPhone"
                   placeholder="Customer Phone">
        </div>
    </div>

    <div class="form-group row">
        <label for="reciverName" class="col-sm-3 col-form-label">Reciver Name</label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="reciverName" placeholder="Reciver Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="dstCompany" class="col-sm-3 col-form-label">Customer Reciver</label>
        <div class="col-sm-9">
            <input name="dstCompany" type="text" class="form-control" id="dstCompany"
                   placeholder="Customer Reciver">
        </div>
    </div>
    <div class="form-group row">
        <label for="dstAddress" class="col-sm-3 col-form-label">Destination Address</label>
        <div class="col-sm-9">
            <input name="dstAddress" type="text" class="form-control" id="dstAddress"
                   placeholder="Destination Address">
        </div>
    </div>
    <div class="form-group row">
        <label for="reciverPhone" class="col-sm-3 col-form-label">Reciver Phone</label>
        <div class="col-sm-9">
            <input name="reciverPhone" type="text" class="form-control" id="reciverPhone"
                   placeholder="Reciver Phone">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Create Invoice</button>
        </div>
    </div>
</form>
    </body>
</html>