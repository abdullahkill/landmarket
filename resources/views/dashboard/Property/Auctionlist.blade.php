@extends('dashboard.layouts.master')
@section('title')
@section('content')
<div class="row">
    <div class="col">
        
        <div class="card card-modern">
            <div class="card-body">
                <div class="datatables-header-footer-wrapper">
                    <div class="datatable-header">
                        <div class="row align-items-center mb-3">
                            <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                                <a href="/Auction" class="btn btn-primary btn-md font-weight-semibold btn-py-2 px-4">Go Auction</a>
                            </div>
                            <div class="col-8 col-lg-auto ml-auto mb-3 mb-lg-0">
                                <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                    <label class="ws-nowrap mr-3 mb-0">Filter By:</label>
                                    <select class="form-control select-style-1 filter-by" name="filter-by">
                                        <option value="all" selected>All</option>
                                        <option value="1">ID</option>
                                        <option value="2"> Name</option>
                                        <option value="3">Code</option>
                                        <option value="4">Usage/Limit</option>
                                        <option value="5">Expiry Date</option>
                                        <option value="5">Creating Date</option>
                                        <option value="5">Status</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 col-lg-auto pl-lg-1 mb-3 mb-lg-0">
                                <div class="d-flex align-items-lg-center flex-column flex-lg-row">
                                    <label class="ws-nowrap mr-3 mb-0">Show:</label>
                                    <select class="form-control select-style-1 results-per-page" name="results-per-page">
                                        <option value="12" selected>12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-auto pl-lg-1">
                                <div class="search search-style-1 search-style-1-lg mx-lg-auto">
                                    <div class="input-group">
                                        <input type="text" class="search-term form-control" name="search-term" id="search-term" placeholder="Search Order">
                                        <span class="input-group-append">
                                            <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list" style="min-width: 750px;">
                        <thead>
                            <tr>
                                <th width="3%"><input type="checkbox" name="select-all" class="select-all checkbox-style-1 p-relative top-2" value="" /></th>
                                <th width="8%">Name Property</th>
                                <th width="25%"> BidAmount</th>
                                <th width="18%">Area</th>
                                <th width="12%">Timer</th>
                                <th width="12%">Price</th>
                                <th width="12%">City</th>
                                {{-- <th width="12%">City</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $list)
                            <tr>
                                <td width="30"><input type="checkbox" name="checkboxRow1" class="checkbox-style-1 p-relative top-2" value="" /></td>
                                <td><a href="ecommerce-coupons-form.html"><strong>{{ $list->PropertyTittle}}</strong></a></td>
                                <td><a href="ecommerce-coupons-form.html"><strong>{{ $list->bidamount}}</strong></a></td>
                                <td>{{ $list->Propertyaddress}}</td>
                                <td>{{ $list->Timer}}</td>
                                <td>{{ $list->Propertyprice}}</td>
                                <td>{{ $list->City}}</td>
                                {{-- <td><span class="ecommerce-status active">Active</span></td> --}}
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <hr class="solid mt-5 opacity-4">
                    <div class="datatable-footer">
                        <div class="row align-items-center justify-content-between mt-3">
                            <div class="col-md-auto order-1 mb-3 mb-lg-0">
                                <div class="d-flex align-items-stretch">
                                    <select class="form-control select-style-1 bulk-action mr-3" name="bulk-action" style="min-width: 170px;">
                                        <option value="" selected>Bulk Actions</option>
                                        <option value="delete">Delete</option>
                                    </select>
                                    <a href="ecommerce-coupons-form.html" class="bulk-action-apply btn btn-light btn-px-4 py-3 border font-weight-semibold text-color-dark text-3">Apply</a>
                                </div>
                            </div>
                            <div class="col-lg-auto text-center order-3 order-lg-2">
                                <div class="results-info-wrapper"></div>
                            </div>
                            <div class="col-lg-auto order-2 order-lg-3 mb-3 mb-lg-0">
                                <div class="pagination-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- end: page -->
</section>
</div>
@endsection