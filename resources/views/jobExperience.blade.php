@extends('layout.main')
@section('main-section')
@push('title')
<title>Job-Experience</title>
<h1 class="text-center">
    <u>Job Experience</u>
</h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
            {{-- Professional Experience --}}
            <h4>Professional Experience</h4>
            <div class="col-md-6">
                <label for="">Institution Name</label>
              <input type="text" name = "p-institution" class="form-control"  value=""  placeholder="Institution Name..." >
            </div>
            <div class="col-md-6">
                <label for="">Designation</label>
              <input type="text" name = "p-designation" class="form-control"  value=""  placeholder="Designation Name..." >
            </div>
            <div class="col-md-6">
                <label for="">Start-Date</label>
              <input type="date" name = "p-start-date" class="form-control"  value=""  placeholder="Working-Duration..." >
            </div>
            <div class="col-md-6">
              <label for="">End-Date</label>
            <input type="date" name = "p-end-date" class="form-control"  value=""  placeholder="Working-Duration..." >
          </div>
            <h4>Volunteer Experience</h4>
            <div class="col-md-6">
                <label for="">Institution Name</label>
              <input type="text" name = "v-institution" class="form-control"  value=""  placeholder="Institution Name..." >
            </div>
            <div class="col-md-6">
                <label for="">Designation</label>
              <input type="text" name = "v-designation" class="form-control"  value=""  placeholder="Designation Name..." >
            </div>
            <div class="col-md-6">
                <label for="">Start-Date</label>
              <input type="date" name = "v-start-date" class="form-control"  value=""  placeholder="Working-Duration..." >
            </div>
            <div class="col-md-6">
              <label for="">End-Date</label>
            <input type="date" name = "v-end-date" class="form-control"  value=""  placeholder="Working-Duration..." >
          </div>
            <div class="container mt-3">
                <button class="btn btn-dark mb-5">Previous</button>
                <button class="btn btn-success mb-5">Submit</button>
            </div>
        </div>
        </form>
    </div>
    
@endsection