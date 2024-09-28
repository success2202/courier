@extends('admin.layouts.admin')
@section('content')
 <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action='{{route('admin.courier.update', encrypt($courier->id))}}' method='post', enctype='multipart/form-data'>
                @csrf
              <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Update Courier Info</h6>
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="product"  value="{{$courier->product}}" class="form-control @error('product') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Product Name
                                            </small>
                                            @error('product')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="sender_name"  value="{{$courier->sender_name}}" class="form-control @error('sender_name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Sender Name
                                            </small>
                                            @error('sender_name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="sender_phone"  value="{{$courier->sender_phone}}" class="form-control @error('sender_phone') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Sender Phone
                                            </small>
                                            @error('sender_phone')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                               
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="sender_email"  value="{{$courier->sender_email}}" class="form-control @error('sender_email') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Sender Email
                                            </small>
                                            @error('sender_email')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="sender_address"  value="{{$courier->sender_address}}" class="form-control @error('sender_address') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Sender address
                                            </small>
                                            @error('sender_address')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="receiver_name"  value="{{$courier->receiver_name}}" class="form-control @error('receiver_name') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Receiver name
                                            </small>
                                            @error('receiver_name')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="receiver_phone"  value="{{$courier->receiver_phone}}" class="form-control @error('receiver_phone') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="" required>
                                        <small id="emailHelp" class="form-text text-muted">Receiver phone
                                        </small>
                                        @error('receiver_phone')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="receiver_email"  value="{{$courier->receiver_email}}" class="form-control @error('receiver_email') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="" required>
                                        <small id="emailHelp" class="form-text text-muted">Receiver name
                                        </small>
                                        @error('receiver_email')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="receiver_address"  value="{{$courier->receiver_address}}" class="form-control @error('receiver_address') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="" required>
                                        <small id="emailHelp" class="form-text text-muted">Receiver name
                                        </small>
                                        @error('receiver_address')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                  
                                 

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="weight"  value="{{$courier->weight}}" class="form-control @error('weight') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Weight
                                            </small>
                                            @error('weight')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="amount"  value="{{$courier->amount}}" class="form-control @error('amount') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Amount
                                            </small>
                                            @error('amount')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="size"  value="{{$courier->size}}" class="form-control @error('size') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter size
                                            </small>
                                            @error('size')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="type"  value="{{$courier->type}}" class="form-control @error('type') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Type eg. Parcel or Sentiments
                                            </small>
                                            @error('type')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="qty"  value="{{$courier->qty}}" class="form-control @error('qty') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Product Quantity
                                            </small>
                                            @error('qty')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="frieght"  value="{{$courier->frieght}}" class="form-control @error('frieght') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter frieght with currency
                                            </small>
                                            @error('frieght')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="origin"  value="{{$courier->origin}}" class="form-control @error('origin') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Originating Address
                                            </small>
                                            @error('origin')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="destination"  value="{{$courier->destination}}" class="form-control @error('destination') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter Destination Address
                                            </small>
                                            @error('destination')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="frieght"  value="{{$courier->frieght}}" class="form-control @error('freight') is-invalid @enderror" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="" required>
                                            <small id="emailHelp" class="form-text text-muted">Enter freight with currency
                                            </small>
                                            @error('freight')
                                            <span class="invalid-feedback"> <small> * </small> </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="departure_date"  value="{{$courier->departure_date}}" class="form-control @error('departure_date') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter Departure date
                                        </small>
                                        @error('departure_date')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="pick_date"  value="{{$courier->pick_date}}" class="form-control @error('pick_date') is-invalid @enderror" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">Enter Pick Date
                                        </small>
                                        @error('pick_date')
                                        <span class="invalid-feedback"> <small> * </small> </span>
                                        @enderror
                                    </div>
                                </div>
                                          <div class="col-md-4 ">
                                              <div class="custom-file">
                                            <input type="file" name="images[]" multiple class="custom-file-input  @error('images') is-invalid @enderror">
                                                <label class="custom-file-label" for="customFile">Select Product Images</label>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted"> Choose Images
                                            </small>
                                              @error('images')
                                            <span class="invalid-feedback"> <small> *</small> </span>
                                            @enderror
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
                             <button type="submit" class="btn btn-primary p-3">Add Courier Information</button>
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
$('input[name="departure_date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

$('input[name="pick_date"]').daterangepicker({
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