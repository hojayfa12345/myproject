@extends('admin.admin_layout')
@section('content')
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">Starlight</a>
        <span class="breadcrumb-item active">Price Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Price Setting  </h6>
          <p class="mg-b-20 mg-sm-b-30"> Price Update</p>
          <form action="{{ route('update.price') }}" method="post" >
          	@csrf
          <input type="hidden" name="id" value="{{ $price->id }}">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"> basic_month: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="basic_month"  required="" value="{{ $price->basic_month }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">premium_month: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="premium_month"  required="" value="{{ $price->premium_month }}">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">corporate_month <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="corporate_month"  required="" value="{{ $price->corporate_month }}">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">basic_year <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="basic_year"  required="" value="{{ $price->basic_year }}">
                </div>
              </div><!-- col-4 -->

               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">premium_year <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="premium_year"  required="" value="{{ $price->premium_year }}">
                </div>
              </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">corporate_year<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="corporate_year"  required="" value="{{ $price->corporate_year }}">
                </div>
              </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">community_month<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="community_month"  required="" value="{{ $price->community_month }}">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">community_year<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="community_year"  required="" value="{{ $price->community_year }}">
                </div>
              </div><!-- col-4 -->
                
              </div><!-- col-4 -->

            </div><!-- row -->
            <br>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Update </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- card -->
       
      </div><!-- sl-pagebody --> 
    </div><!-- sl-mainpanel -->




@endsection
