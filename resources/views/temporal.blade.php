@extends('layout.main')
@section('main-section')
@push('title')
<title>Temporal Detail</title>
<h1 class="text-center">
    <u>Temporal Detail</u>
</h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
          {{-- Matric Details --}}
            <h4>Secondary School Education Detail(Matric/A-Level)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "matric-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "matric-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "matric-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board</label>
              <input type="text" name = "matric-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "matric-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- Higher Secondary school Details --}}
            <h4>Higher Seondary School Education Detail(Intermediate/O-Level)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "higher-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "higher-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "higher-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board</label>
              <input type="text" name = "higher-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "higher-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- Bachelor educational detail --}}
            <h4>Bachelor Education Detail(14 Year Education)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "ba-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "ba-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "ba-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board/University</label>
              <input type="text" name = "ba-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "ba-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- Masters Educational Detail --}}
            <h4>Master/BS(Hons) Education Detail(16 Year Education)</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "bs-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "bs-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "bs-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board/University</label>
              <input type="text" name = "bs-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "bs-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- M-phil or MS Education Details --}}
            <h4>MPhil/MS Education Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "ms-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "ms-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "ms-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board/University</label>
              <input type="text" name = "ms-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "ms-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            {{-- PHD Education Detail --}}
            <h4>PHD Education Detail</h4>
            <div class="col-md-4">
                <label for="">Percentage</label>
                <input type="number" name = "phd-percentage" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Major-Subjects</label>
                <input type="text" name = "phd-subjects" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Institution Name</label>
                <input type="text" name = "phd-inst-name" class="form-control"  value=""  placeholder="Institution Name" required>
            </div>
            <div class="col-md-4">
              <label for="">Name of Educational Board/University</label>
              <input type="text" name = "phd-board" class="form-control"  value=""  placeholder="Percentage..." required>
            </div>
            <div class="col-md-4">
                <label for="">Date Of Completion</label>
                <input type="date" name = "phd-date" class="form-control"  value=""  placeholder="Date Of completion..." required>
            </div>
            <div class="col-md-12">
                <button class="btn btn-dark mb-5">Previous</button>
                <button class="btn btn-success mb-5">Next</button>
            </div>
        </div>
        </div>
        </form>
        </div>
        
@endsection