

Skip to content
Using Gmail with screen readers
Meet
New meeting
Join a meeting
Hangouts
Conversations
2 GB of 15 GB used
Terms · Privacy · Program Policies
Last account activity: 1 day ago
Details

<title>Leave Application</title>
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
  

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">

              @include("/include.header")
              <!-- <b style="float:right;">Date: {{date("d/m/Y", Strtotime($details->created_at))}}</b>
              <br/> -->
              <h3 style="text-align: center;"><u>LEAVE APPLICATION {{$details->type}}</u></h3>










              <div class="row" style="">
  <div class="col-12 col-sm-auto mb-3">
    <div class="mx-auto" style="width: 140px;">
      <!-- <span class="badge badge-secondary">administrator</span> -->
      <!-- <div class="text-muted"><small>{{$settings[0]->address}}</small></div> -->
      <!-- <div><small>{{$settings[0]->address}}</small></div> -->
      <br/>
      <!-- <div><small style="color:black; font-weight: 700;">Address: 
      {!! nl2br(e($settings[0]->address)) !!}</small></div>
      <div><small style="color:black; font-weight: 700;">Address: 
      {!! nl2br(e($settings[0]->address2)) !!}</small></div>
      <div><small style="color:black; font-weight: 700;">City: {{$settings[0]->city}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: {{$settings[0]->state}}</small></div> -->
      <div><small style="color:black; font-weight: 999; font-size:16px;">To!</small></div>
      <div><small style="color:black; font-weight: 999; font-size:16px;">The CEO,</small></div>
      <div><small style="color:black; font-weight: 999; font-size:16px;">{{$settings[0]->title}},</small></div>
      <div><small style="color:black; font-weight: 999; font-size:12px;">{{$settings[0]->address}},</small></div>
      <!-- <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
        <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
      </div> -->
      
    </div>
  </div>
  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
    <div class="text-center text-sm-left mb-2 mb-sm-0">
     
     
      
      <!-- <div class="text-muted"><small style="color:black; font-weight: 700;">Admission Date: {{$settings[0]->email}}</small></div> -->

    </div>
    @if($details->image)
     <div class="text-center text-sm-right">
      <img src="/{{$details->image}}" style="height: 140px; width: 140px;">
    </div>
    @endif
  </div>
</div>









              <div class="row">
          
              </div>
              <!-- <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul> -->
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <u><b>With due respect, I want to inform you that I have an urgent piece of work at home, so I will not be able to attend the office today. Therefore, kindly approve my leave for {{$details->days}} day/days. from {{date("d/m/Y", Strtotime($details->from))}} to {{date("d/m/Y", Strtotime($details->to))}}. I will be very thankful to you.</b></u>
                            </div>
                          </div>
                        
                        </div>

                    

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
   
                        
                        
                        
                        <div class="row">
                          <!-- <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Permanent Address:</label> <u><b>{{$details->permanent}}</b></u>
                            </div>
                          </div> -->
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">REASONS: </label><br/>
                      <u><b>{{$details->reason}}</b></u><br/>
     <!--  <u><b>2: Passport size picture.</b></u><br/>
      <u><b>3: One reference from your family member.</b></u><br/>
      <u><b>Please sign and return this letter to signal your acceptance of this offer and all its terms. Congratulations and welcome to {{$settings[0]->system_name}}. </b></u><br/><br/> -->
                            </div>
                          </div>

                        </div>

                      
                       
                        </table>
                        <!-- <div class="mb-2" style="text-align: center;"><b><h2><u>CNIC (FRONT | BACK)</u></h2></b></div> -->
                         <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <!-- <label style="color:black; font-weight: 700;">GM Signature</label> -->
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                             <!--  <label style="color:black; font-weight: 700;">DM Signature</label> -->
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Yours Sincerely,</label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <!-- <label style="color:black; font-weight: 700;">_______________________________________</label> -->
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <!-- <label style="color:black; font-weight: 700;">_______________________________________</label> -->
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">{{$details->appoint->employee_name}}</label>
                            </div>
                          </div>
                        </div>
                        
                        <br/><br/><br/><br/>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">GM Signature</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">DM Signature</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">CEO Signature</label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">_______________________________________</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">_______________________________________</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">_______________________________________</label>
                            </div>
                          </div>
                        </div>

                       
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

details.blade.php
Displaying details.blade.php.