<title>Registration Form</title>
<style>

body{
    margin-top:20px;
    background:#f8f8f8
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<script src="{{asset('js/test.js')}}"></script>
<link href="{{asset('css/test.css')}}" rel="stylesheet">
<br/>

<div class="container">
<div class="row flex-lg-nowrap">
  <!-- <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div>
  </div> -->

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <br/>
              @include('include.header')
              <h3 style="text-align: center;"><u>Forman Details</u></h3>
              <div class="col-md-12">
                
              </div>
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <!-- <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div> -->

                    
                    
                  </div>

                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  </div>
                  <!-- <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div> -->
                </div>
              </div>
              <!-- <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul> -->
             
                        <!---------------------------->
                        <div class="col-md-12">
                          <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                             
                                Date: {{date("d/m/Y", strtotime($details[0]->date))}}
                            </label>
                              <u><b></b></u>
                            </div>
                         </div>
                         <div class="col-md-6">
                         <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                Bill #: {{$details[0]->bill_no}}</label>
                              <u><b></b></u>
                            </div> 
                         </div>
                         </div>
                        </div>
                          <!-------------------------->
                          <div class="col-md-12">
                          <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                Supplier: {{$details[0]->accounts->account_name}}</label>
                              <u><b></b></u>
                            </div>
                         </div>
                         <div class="col-md-6">
                         <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                Phone: 03097814965</label>
                              <u><b></b></u>
                            </div> 
                         </div>
                         </div>
                        </div>
                          <!-------------------------->
                          <div class="col-md-12">
                          <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                Biller: {{$details[0]->users->name}}</label>
                              <u><b></b></u>
                            </div>
                         </div>
                         <div class="col-md-6">
                        <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                Address: Dha phase 2, Lahore</label>
                              <u><b></b></u>
                            </div>
                         </div>
                        <!------->
                         </div>
                        </div>
                          <!-------------------------->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Product Name</th>
                                    <th>Product unit</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="items">
                              @php $sum = 0; @endphp
                              @php $sums =0; @endphp
                              @php $quantity =0; @endphp
                              @php $price =0; @endphp
                            @foreach($details[0]->purchase_details as $detail)
                            @php $sum = $sum + 1 @endphp
                                <tr>
                                    <td>
                                      {{$sum}}
                                    </td>
                                    <td>
                                      {{$detail->prodcts->name}}
                                    </td>
                                    <td>
                                      {{$detail->uoms->uom}}
                                    </td>
                                    <td>
                                      {{$detail->quantity_out}}
                                    </td>
                                    <td>
                                      {{$detail->cost}}
                                    </td>
                                    <td>
                                      {{$detail->total}}
                                    </td>
                                </tr>  
                                @php $sums = $sums + $detail-> total; @endphp 
                                @php $quantity = $quantity + $detail-> quantity_out; @endphp
                                
                                @endforeach
                                <tr>      
                                      
                                  <td colspan="3"><b>Total</b></td>
                                  <td><b>{{number_format($quantity)}}</b></td>
                                  <td><b></b></td>
                                  <td><b>{{number_format($sums)}}</b></td>
                                </tr>
                            </tbody>

                        </table>
@include('include.footer')
                      
                      </div>
                    </div>
                     <!-- <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Keeping in Touch</b></div>
                        <div class="row">
                          <div class="col">
                            <label>Email Notifications</label>
                            <div class="custom-controls-stacked px-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!--   <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div> -->
    </div>

  </div>
</div>
</div>