<title>Order Report</title>
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
              <h3 style="text-align: center;"><u>Admin Stock</u></h3>
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
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form">
                        <div class="row">
                          <div class="col">
                            <center>
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">
                                From:{{date("d/m/Y", strtotime($fromDate))}}   /


                                To:{{date("d/m/Y", strtotime($toDate))}}
                              </label>
                              <u><b></b></u></center>
                            </div>
                          </div>
                        </div>
                       
                        </div>
                     
                       
                        <table class="table table-bordered"  style="border:2px solid black">
                          
                            <thead  style="border:2px solid black">
                              
                                <tr style="border:2px solid black">
                                    <th >Sr.No</th>
                                    <th>Date</th>
                                    <th>Bill#</th>
                                    <th>Supplier</th>
                                    <th>Biller</th>
                                    <th>Quantity in</th>
                                    <th>Quantity out</th>
                                    <th>Total Quantity</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody id="items"  style="border:2px solid black">
                              @php $quantityin =0; $quantityout =0; @endphp
                              @if(count($purchase) > 0)
                           @foreach($purchase as $purchases)
                                <tr style="border:2px solid black">
                                  <td>
                                     {{$purchases->id}}
                                     
                                    </td>
                                    <td>
                                     {{$purchases->date}}
                                    </td>
                                    <td>
                                      {{$purchases->bill_no}}
                                    </td>
                                    <td>
                                      {{$purchases->accounts[0]->account_name}}
                                    </td>
                                    <td>
                                     {{$purchases->users->name}}
                                    </td>
                                    <td>
                                      {{$purchases->purchase_details[0]->quantity}}
                                     </td>
                                     <td>
                                      {{$purchases->purchase_details[0]->quantity_out}}
                                     </td>
                                    
                          
                                   
                                    @foreach($purchases->purchase_details as $detail)
                                    
                                
                                  
                              @endforeach
                              <?php
                              $quantityin = $quantityin + $detail->quantity;
                                
                              $quantityout = $quantityout - $detail->quantity_out; 
                               ?> 
                             
                                 <td>
                                     {{$quantityin - $quantityout}}
                                    </td>
                                 
                                    
                                </tr>  
                                
                                @endforeach
                                @else
                                <tr>
                                 <td colspan="7" style="color: red;">
                                    <center>NO Record  FOUND!</center>
                                    </td>
                                    
                                </tr>  
                                @endif
                                <!---------signature----->
                               
                                <!-------end signature--->
                            </tbody>
                        
                        </table>
                        
@include('include.footer')
                      
                      </div>
                    </div>
                     

                  </form>

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