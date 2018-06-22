@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <form class="form-horizontal" action="/records/insert" method="post">
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-file"></span>&nbsp; New Client</h4>
                    <br>
                    <input type="hidden" name="client-id" value="">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="fname">First Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="lname">Last Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="address">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="cnumber">Contact Number:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="cnumber" name="cnumber" placeholder="Enter contact number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="bdate">Birth Date:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bdate" name="bdate" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container-fluid">
                        <h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign"></span>&nbsp; Matching Clients:</h4>
                        <br>
                        <table id="tbl-matches" class="table table-striped table-bordered table-condensed">
                            <thead>
                                <th class="col-md-11">Name and Address</th>
                                <th class="col-md-1">Actions</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="col-md-12">Type client's first name, last name or birth date.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="services-container" class="col-md-6">
                    <hr>
                    <h4 class="font-weight-bold">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-wrench"></span>&nbsp;Services</h4>
                    <div class="services-div-cont">
                        <br>
                        <div class="input-group serv-sel-cont">
                            <select name="services" id="services-1" name="services-1" class="form-control height-33px">
                                <option value="opt0">-- Select service --</option>
                                <option value="opt1">Complete Wash</option>
                                <option value="opt2">Body Wash</option>
                                <option value="opt3">Hand Wax</option>
                                <option value="opt4">Vacuum</option>
                                <option value="opt5">Under Wash</option>
                                <option value="opt6">Engine Wash</option>
                            </select>
                            <span class="btn-rem-serv-disabled input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        </div>    
                    </div>
                    <div class="services-div-cont">
                        <br>
                        <div class="input-group serv-sel-cont">
                            <select name="services" id="services-2" name="services-2" class="form-control height-33px">
                                <option value="opt0">-- Select service --</option>
                                <option value="opt1">Complete Wash</option>
                                <option value="opt2">Body Wash</option>
                                <option value="opt3">Hand Wax</option>
                                <option value="opt4">Vacuum</option>
                                <option value="opt5">Under Wash</option>
                                <option value="opt6">Engine Wash</option>
                            </select>
                            <span class="btn-rem-serv input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        </div>    
                    </div>
                    <div class="services-div-cont">
                        <br>
                        <div class="input-group serv-sel-cont">
                            <select name="services" id="services-3" name="services-3" class="form-control height-33px">
                                <option value="opt0">-- Select service --</option>
                                <option value="opt1">Complete Wash</option>
                                <option value="opt2">Body Wash</option>
                                <option value="opt3">Hand Wax</option>
                                <option value="opt4">Vacuum</option>
                                <option value="opt5">Under Wash</option>
                                <option value="opt6">Engine Wash</option>
                            </select>
                            <span class="btn-rem-serv input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                        </div>    
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" id="btn-add-service" class="btn btn-default pull-right"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Service</button>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default pull-right"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
                            <button type="reset" class="btn btn-default pull-right"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Clear</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </form>
    </div>

@endsection
