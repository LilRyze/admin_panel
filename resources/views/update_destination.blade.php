@extends('layouts.add_bootstrap')
@include('layouts.app')
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form method="post" action="/update_destination/{{$id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group ">
                        <label class="control-label " for="name">
                            Destination
                        </label>
                        <input class="form-control" id="name" name="name" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="description">
                            Description
                        </label>
                        <input class="form-control" id="description" name="description" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="price">
                            Price
                        </label>
                        <input class="form-control" id="price" name="price" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="hotel">
                            Hotel
                        </label>
                        <input class="form-control" id="hotel" name="hotel" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="included">
                            Included
                        </label>
                        <input class="form-control" id="included" name="included" placeholder="All included or no?" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="ticket_included">
                            Ticket Included
                        </label>
                        <input class="form-control" id="ticket_included" name="ticket_included" placeholder="Ticket included or no?" type="text"/>
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="guided_visits">
                            Guided Visits
                        </label>
                        <input class="form-control" id="guided_visits" name="guided_visits" type="text"/>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="btn btn-primary " name="submit" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
