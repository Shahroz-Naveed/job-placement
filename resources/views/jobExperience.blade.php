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
            <h4>Darsenizami Job Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
              <input type="number" name = "hifz-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>

            {{-- Professional Experience --}}
            <h4>Professional Experience</h4>
            <div class="col-md-4">
                <label for="">Institution Name</label>
              <input type="text" name = "p-institution" class="form-control"  value=""  placeholder="Institution Name..." required>
            </div>
            <div class="col-md-4">
                <label for="">Designation</label>
              <input type="text" name = "p-designation" class="form-control"  value=""  placeholder="Designation Name..." required>
            </div>
            <div class="col-md-4">
                <label for="">Duration</label>
              <input type="date" name = "p-date" class="form-control"  value=""  placeholder="Working-Duration..." required>
            </div>
            <h4>Volunteer Experience</h4>
            <div class="col-md-4">
                <label for="">Institution Name</label>
              <input type="text" name = "v-institution" class="form-control"  value=""  placeholder="Institution Name..." required>
            </div>
            <div class="col-md-4">
                <label for="">Designation</label>
              <input type="text" name = "v-designation" class="form-control"  value=""  placeholder="Designation Name..." required>
            </div>
            <div class="col-md-4">
                <label for="">Duration</label>
              <input type="date" name = "v-date" class="form-control"  value=""  placeholder="Working-Duration..." required>
            </div>
            <div class="container mt-3">
                <button class="btn btn-dark mb-5">Previous</button>
                <button class="btn btn-success mb-5">Submit</button>
            </div>
        </div>
        </form>
    </div>
    
@endsection