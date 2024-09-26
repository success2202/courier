@extends('admin.layouts.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.tracking.store')}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Setup Tracking Info</h6>
                            <div class="row">

                                <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <select name="courier_info_id" class="form-control @error('courier_info_id') is-invalid @enderror" required> 
                                               <option> </option>
                                                @foreach($courier as $cour)
                                                <option> {{$cour->product}} {{$cour->sender_name}}  {{$cour->receiver_name}}</option>
                                                @endforeach
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Select Courier
                                            </small>
                                            @error('courier_info_id')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                          
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" required> 
                                            <option> </option>
                                            <option value="CREATED"> CREATED </option>
                                            <option value="SHIPPED"> SHIPPED </option>
                                            <option value="IN_TRANSIT"> IN TRANSIT </option>
                                            <option value="IN_PROCESS"> IN PROCESS </option>
                                            <option value="ON_HOLD"> ON HOLD </option>
                                            <option value="CANCELLED"> CANCELLED </option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">Select Shipment Status
                                        </small>
                                        @error('status')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                        
                                            
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="current_city"  value="{{old('current_city')}}" class="form-control @error('current_city') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="" required>
                                        <small id="emailHelp" class="form-text text-muted">Enter current city
                                        </small>
                                        @error('current_city')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="current_location"  value="{{old('current_location')}}" class="form-control @error('current_location') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter current location
                                        </small>
                                        @error('current_location')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="arrival_time"  value="{{old('arrival_time')}}" class="form-control @error('arrival_time') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter Arrival Date 
                                        </small>
                                        @error('arrival_time')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="update_date"  value="{{old('update_date')}}" class="form-control @error('update_date') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter Pick Date
                                        </small>
                                        @error('update_date')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                        
                                            
                            </div> 

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                      
                                      <textarea id="summernote" class="@error('comment') is-invalid @enderror" name="comment">{{old('comment')}}</textarea>
                                       <small id="emailHelp" class="form-text text-muted">Comments
                                              </small>
                                              @error('comment')
                                              <span class="invalid-feedback"> <small> *</small> </span>
                                              @enderror
                                      </div>
  
  
                                           </div>
                            </div>
                        </div>
                         
                    </div>
                          
                         <div class="card">
                        <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                          </div>
                          <div class="col-md-4">
                        <div class="p-5">
                             <button type="submit" class="btn btn-primary p-3">Create Tracking Info</button>
                           </div>
                           </div>
                           </div>
                        </div>
                        </div>
                    </form>

    </div>
                        </div>
                    </div>
                   

@endsection
@section('script')
<script>




$('input[name="update_date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});
$('input[name="arrival_time"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 8000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection