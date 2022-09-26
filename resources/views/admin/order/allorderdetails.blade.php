@extends('admin.layouts.app')

@section('content')

<head>
    <style>
        .special-box {
            box-shadow: 0px 1px 6px 0px rgb(208 208 208 / 61%);
        }

        .special-box {
            margin-bottom: 20px;
        }

        .special-box .heading-area {
            background: #eaeaf1;
            border-bottom: 0px;
            padding: 10px 30px 10px;
        }

        .heading-area {
            background: #fff;
            padding: 30px 30px 30px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.15);
            padding-bottom: 20px;
            margin-bottom: 25px;
        }

        .special-box .table-responsive-sm {
            padding: 0px 30px 10px 30px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }


        .h4,
        h4 {
            font-size: 22px !important;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0 !important;
            margin-bottom: -0.5rem !important;
            font-weight: 600 !important;
            line-height: 3.2 !important;
            color: #181c32 !important;
        }

        .special-box .footer-area .mybtn1 {
            display: inline-block;
            text-transform: unset;
            border-radius: 50px;
            background: #2d3274;
            box-shadow: none;
        }

        .mybtn1 {
            border-radius: 50px;
            background-color: #1f224f;
            -webkit-box-shadow: 0px 5px 10px 0px rgb(14 35 107 / 30%);
            box-shadow: 0px 5px 10px 0px rgb(14 35 107 / 30%);
            text-align: center;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            display: inline-block;
            -webkit-transition: all 0.3s ease-in;
            -o-transition: all 0.3s ease-in;
            transition: all 0.3s ease-in;
            position: relative;
            padding: 7px 25px;
            border: 0px;
        }

        .order-details-table .mr-table {
            box-shadow: 0px 1px 6px 0px rgb(208 208 208 / 61%);
            padding-bottom: 5px;
        }

        .order-table-wrap .mr-table {
            padding: 0px;
            margin-top: 20px;
            text-align: center;
        }

        .order-table-wrap .mr-table .title {
            background: #eaeaf1;
            display: block;
            width: 100%;
            padding: 10px 25px 10px;
            text-align: left;
            margin-bottom: 0px;
        }

        .order-table-wrap .mr-table .title {
            font-weight: 600;
            font-size: 19px;
            display: inline-block;
        }
    </style>
</head>
<div style="background-color:white">
    <div class="container" style="margin-top:7pc;margin-left:7pc">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h1> Details List </h1>
                    <p>Dashboard &gt; Details &gt; List </p>
                </div>
            </div>
        </div>

        <div class="order-table-wrap">
            <div class="alert alert-success validation" style="display: none;">
                <button type="button" class="close alert-close"><span>×</span></button>
                <p class="text-left"></p>
            </div>
            <div class="alert alert-danger validation" style="display: none;">
                <button type="button" class="close alert-close"><span>×</span></button>
                <ul class="text-left">
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="special-box">
                        <div class="heading-area">
                            <h4 class="title">
                                Order Details
                            </h4>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="45%" width="45%">Order ID</th>
                                        <td width="10%">:</td>
                                        <td class="45%" width="45%">{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Total Product</th>
                                        <td width="10%">:</td>
                                        <td width="45%">{{$orderdetail->count()}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Shipping Method</th>
                                        <td width="10%">:</td>
                                        <td width="45%">Free Shipping</td>
                                    </tr>


                                    <tr>
                                        <th width="45%">Packaging Method</th>
                                        <td width="10%">:</td>
                                        <td width="45%">Default Packaging</td>
                                    </tr>




                                    <tr>
                                        <th width="45%">Total Cost</th>
                                        <td width="10%">:</td>
                                        <td width="45%">${{$order->net_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Ordered Date</th>
                                        <td width="10%">:</td>
                                        <td width="45%">{{$order->created_at->format('Y-m-d H:i:s')}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Payment Method</th>
                                        <td width="10%">:</td>
                                        <td width="45%">{{$order->pay_method}}</td>
                                    </tr>

                                    <tr>
                                        <th width="45%">Paytm Transaction ID</th>
                                        <td width="10%">:</td>
                                        <td width="45%"></td>
                                    </tr>


                                    <tr>
                                        <th width="45%">Payment Status</th>
                                        <th width="10%">:</th>
                                        <td width="45%"><span class="badge badge-danger">{{$order->pay_status}}</span></td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer-area">
                            <a href="{{url('admin/order_allorderinvoice')}}" class="mybtn1"><i class="fas fa-eye"></i> View Invoice</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="special-box">
                        <div class="heading-area">
                            <h4 class="title">
                                Billing Details
                            </h4>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th width="45%">Name</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->fname. ' ' .$order->lname}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Email</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Phone</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Address</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->apart.' '.$order->street}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Country</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->country}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">State</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->state}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">City</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->city}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%">Postal Code</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->zip}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="special-box">
                        <div class="heading-area">
                            <h4 class="title">
                                Shipping Details
                            </h4>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th width="45%"><strong>Name:</strong></th>
                                        <th width="10%">:</th>
                                        <td>{{$order->s_fname.' '.$order->s_lname}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%"><strong>Email:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%"><strong>Phone:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_phone}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%"><strong>Address:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_apart.' '.$order->s_stree}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%"><strong>Country:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_country}}</td>
                                    </tr>


                                    <tr>
                                        <th width="45%">State</th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_state}}</td>
                                    </tr>



                                    <tr>
                                        <th width="45%"><strong>City:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_city}}</td>
                                    </tr>
                                    <tr>
                                        <th width="45%"><strong>Postal Code:</strong></th>
                                        <th width="10%">:</th>
                                        <td width="45%">{{$order->s_zip}}</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12 order-details-table">
                    <div class="mr-table">
                        <h4 class="title">Products Ordered</h4>
                        <div class="table-responsiv">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row btn-area">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-hover dt-responsive dataTable no-footer dtr-inline" cellspacing="0" width="100%" role="grid">
                                            <thead>
                                                <tr role="row">
                                                </tr>
                                                <tr role="row">
                                                    <th width="10%" class="sorting_disabled" rowspan="1" colspan="1">Product ID#</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Shop Name</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Vendor Status</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1">Product Title</th>
                                                    <th width="20%" class="sorting_disabled" rowspan="1" colspan="1">Details</th>
                                                    <th width="10%" class="sorting_disabled" rowspan="1" colspan="1">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orderdetail as $row)
                                                <?php $vendor = App\Models\Vendor::where('id', $row->vendor_id)->first(); 
                                                if(!$vendor){
                                                    $vendor = App\Models\Admin::where('id', $row->admin_id)->first();
                                                }
                                                ?>
                                                <tr role="row" class="odd">

                                                    <td tabindex="0">
                                                        <input type="hidden" value="{{$row->id}}">{{$row->id}}
                                                    </td>
                                                    <td>
                                                        <a target="_blank" href="https://royalscripts.com/demo/kingcommerce/admin/vendors/13/show">{{$vendor->shop_name}}</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">{{$ven_status[$vendor->status]}}</span>
                                                    </td>
                                                    <td>
                                                        <input type="hidden" value="">
                                                        <a target="_blank" href="https://royalscripts.com/demo/kingcommerce/item/physical-product-title-title-will-be-here-101-8e1101lbq">
                                                            {{$row->p_name}}</a>
                                                    </td>
                                                    <td>
                                                        <p><strong>Size :</strong>{{$row->size}}</p>
                                                        <p><strong>color :</strong>
                                                            <span style="width: 40px; height: 20px; display: block; background: {{$row->color}};"></span>
                                                        </p>
                                                        <p>
                                                            <strong>Price :</strong> ${{$row->p_new_price}}
                                                        </p>
                                                        <p>
                                                            <strong>Qty :</strong> {{$row->pro_qnty}}
                                                        </p>
                                                    </td>

                                                    <td>${{$row->price}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">

                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="example2_previous">
                                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection