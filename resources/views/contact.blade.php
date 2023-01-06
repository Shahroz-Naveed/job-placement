@extends('layout.main')
@section('main-section')
@push('title')
<title>Contact Details</title>
<h1 class="text-center">
    <u>Contact Detail</u>
</h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
            <div class="col-md-6">
              <label for="">Mobile-Number</label>
              <input type="text" name = "n1" class="form-control"  value=""  placeholder="Mobile Number..." required>
            </div>
            <div class="col-md-6">
                <label for="">Whatsapp-Number</label>
                <input type="text" name = "n2" class="form-control"  value=""  placeholder="Whatsapp Number..." required>
            </div>
            <div class="col-md-6">
                <label for="">Province</label>
                <input type="text" name = "province" class="form-control"  value=""  placeholder="Whatsapp Number..." required>
            </div>
            <div class="col-md-6">
                <label for="">City</label>
                <input type="text" name = "city" class="form-control"  value=""  placeholder="City..." required>
            </div>

        </div>
        </form>
    </div>
@endsection