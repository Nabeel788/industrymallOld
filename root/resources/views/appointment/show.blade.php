<title>Appointment Form</title>
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
              <h3 style="text-align: center;"><u>APPOINTMENT LETTER FOR {{$details->employee_name}}</u></h3>
              <div class="row" style="">
  <div class="col-12 col-sm-auto mb-3">
    <div class="mx-auto" style="width: 140px;">
     
      <div><small style="color:black; font-weight: 999; font-size:16px;">Dear Sir!</small></div>
      
    </div>
  </div>
  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
    <div class="text-center text-sm-left mb-2 mb-sm-0">

    </div>
    @if($details->image)
     <div class="text-center text-sm-right">
      <img src="{{asset('root/upload/product')}}/{{$details->image}}" style="height: 140px; width: 140px;">
    </div>
    @endif
  </div>
</div>

   <div class="row">
               
              </div>
             
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <u><b>I am pleased to inform you that you have been appointed for the role of {{$details->type}} at {{$settings[0]->title}}. This is an official letter confirming your employment which starts from {{date("d/m/Y", Strtotime($details->date))}} under the folowing terms and conditions.</b></u>
                            </div>
                          </div>
                          </div>

                    

                        <div class="row">
                          <div class="col">
                            <div class="form-group">

                                <!-------new section---->
                                 <u><b>2: Duty timnigs are 9am to 7pm.</b></u><br/>
      <!--<u><b>3: Company will provide you 15 days with Paid leave after one year.</b></u><br/>-->
      <u><b>4: Probation period will be 90 days.</b></u><br/><br/>
      <u><b>Note: After one year salary will be increased on your performance</b></u>
                            </div>
                          </div>
                       
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Employee Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>{{$details->employee_name}}</b></u>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Employee Phone:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>{{$details->phone}}</b></u>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>{{$details->address}}</b></u>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Salary:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>{{$details->salary}}</b></u>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">Signature:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><b>_________________________________________</b></u>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">
                              <label style="color:black; font-weight: 700;">RECOMMENDATIONS: </label><br/>
                      <u><b>1: Civil ID Copy.</b></u><br/>
      <u><b>2: Passport size picture.</b></u><br/>
      <u><b>3: One reference from your family member.</b></u><br/>
      <u><b>Please sign and return this letter to signal your acceptance of this offer and all its terms. Congratulations and welcome to {{$settings[0]->system_name}}. </b></u><br/><br/>
                            </div>
                          </div>

                        </div>

                      
                       
                        </table>
                        <div class="mb-2" style="text-align: center;"><b><h2><u>CNIC (FRONT | BACK)</u></h2></b></div>
                        

<div class="row" style="border-bottom: 2px solid;">
  
  <div class="col-12 col-sm-4 mb-5">
    @if($details->image_f)
    <div class="mx-auto" style="">
      <img src="{{asset('root/upload/image_front')}}/{{$details->image_f}}" style="width: 115%;">
    </div>
    @endif
  </div>
   <div class="col-12 col-sm-2 mb-5">
    
  </div>
  <div class="col-12 col-sm-4 mb-5">
    @if($details->image_b)
    <div class="mx-auto" style="">
     
      <img src="{{asset('root/upload/image_back')}}/{{$details->image_b}}" style="width: 115%;">
    </div>
    @endif
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