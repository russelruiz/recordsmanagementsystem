@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i> Search Client</span>
                <input type="text" class="form-control" placeholder="Search here...">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; Show All Clients</a>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-7">
            <form class="form-horizontal" action="/">
                <h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></span>&nbsp; New Client</h4>
                <br>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="fname">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fname" placeholder="Enter first name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="lname">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lname" placeholder="Enter last name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="address">Address:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="address" placeholder="Enter address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="cnumber">Contact Number:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="cnumber" placeholder="Enter contact number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Enter email address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="bdate">Birth Date:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="bdate" placeholder="">
                    </div>
                </div>

                <br>
                {{--<h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-wrench"></span>&nbsp; Services</h4>--}}
                <hr>
                <br>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
                    <select name="services" id="services" class="form-control height-33px">
                        <option value="opt0">-- Select service --</option>
                        <option value="opt1">Complete Wash</option>
                        <option value="opt2">Body Wash</option>
                        <option value="opt3">Hand Wax</option>
                        <option value="opt4">Vacuum</option>
                        <option value="opt5">Under Wash</option>
                        <option value="opt6">Engine Wash</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <div>
                        <button class="btn btn-default pull-right"><span class="glyphicon glyphicon-plus"></span></button>
                        <button class="btn btn-default pull-right"><span class="glyphicon glyphicon-minus"></span></button>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
                    <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Clear</button>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="container-fluid">
                <h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span>&nbsp; Order Summary:</h4>
                <br>
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <th class="col-md-8">Items</th>
                        <th class="col-md-4">Amount</th>
                    </thead>
                    <tr>
                        <td class="col-md-8">Body Wax</td>
                        <td class="col-md-4">50.00</td>
                    </tr>
                    <tr>
                        <td class="col-md-8">Body Wax</td>
                        <td class="col-md-4">50.00</td>
                    </tr>
                    <tr>
                        <td class="col-md-8">Body Wax</td>
                        <td class="col-md-4">50.00</td>
                    </tr>
                    <tr class="info">
                        <td class="col-md-8"><span class="font-weight-bold">Total:</span></td>
                        <td class="col-md-4"><span class="font-weight-bold">150.00</span></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
