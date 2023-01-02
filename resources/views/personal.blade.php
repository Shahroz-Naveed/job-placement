@extends('layout.main')
@section('main-section')
@push('title')
<title>Personal-Details</title>
<h1 class="text-center">
    <u>Personal Detail</u>
</h1>
<hr>
    <div class="container " >
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
            <div class="col-md-4">
              <label for="">Name</label>
              <input type="text" name = "name" class="form-control"  value=""  placeholder="Name..." required>
            </div>
            <div class="col-md-4">
              <label for="">Father Name</label>
              <input type="text" name = "f-name" class="form-control"  value=""  placeholder="Father Name..."required>
            </div>
            <div class="col-md-4">
              <label for="">Email</label>
              <input type="email" name = "email" class="form-control"  value=""  placeholder="Email..."     required>
            </div>
            <div class="col-md-4 mt-3">
              <label for="">Height(In-Feet)</label>
              <input type="number" name = "hf" class="form-control"  value=""  placeholder="Height in Feet" required>
            </div>
           <div class="col-md-4 mt-3">
            <label for="">Height(In-Inches)</label>
            <input type="number" name = "hin" class="form-control"  value=""  placeholder="Height in Inches" required>
           </div>
           <div class="col-md-4 mt-3">
            <label for="">Weight(Kg)</label>
            <input type="number" name = "weight" class="form-control"  value=""  placeholder="Height in Inches" required>
           </div>
          <div class="col-md-6 mt-3">
            <label for="">Date Of Birth (mm/dd/yyyy)</label>
            <input type="date" name = "dob" class="form-control"  value=""  placeholder="Height in Feet" required>
          </div>
          <div class="col-md-6 mt-3">
            <label for="">CNIC Number (format: Without Dashes):</label>
            <input type="text" name = "cnic" class="form-control"  value=""  placeholder="CNIC(without dashes)" max ="13"required>
          </div>
         <div class="col-md-4 mt-4">
           <label for="">Blood-Group</label>
           <select name="blood" style="width:100px;" >
              <option value="1"></option>
              <option value="">A+</option>
              <option value="">A-</option>
              <option value="">B+</option>
              <option value="">B-</option>
              <option value="">O+</option>
              <option value="">O-</option>
              <option value="">AB+</option>
              <option value="">AB-</option>
           </select>
         </div>
          <div class="col-md-4 mt-4">
           <label for="">Merital Status</label>
           <select name="marital" style="width:100px;" >
            <option value=""></option>
            <option value="">Single</option>
            <option value="">Married</option>
           </select>
          </div>
          
          <div class="col-md-4 mt-4">
            <label for="">Gender:</label>
            <select name="gender" style="width:100px;">
              <option> </option>
              <option value="">Male</option>
              <option value="">Female</option>
            </select>
          </div>
          <div class="col-md-12  mt-4">
            <label for=""><h4>Choose Your Picture</h4></label>
            <input type="file" name ="pic"class="form-control" required>
          </div>

          </div>
        </div>
      <div class="container  mt-4 ml-6">
        <button class="btn btn-success mb-5">Next</button>
      </div>
        </form>
    </div>
    

    @endsection
