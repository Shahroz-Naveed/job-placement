@extends('layout.main')
@section('main-section')
@push('title')
<title>Communication Proficiency And Skills</title>
<h1 class="text-center">
<u>Communication Proficiency And Skills</u></h1>
<hr>
    <div class="container">
        <form class="form-group" action="" method="">
            @csrf
        <div class="row">
            <h4>Skills</h4>
            <div class="col-md-4">
                    <input type="checkbox"  name="sk1" value="">
                    <label for="">Critical Thinking</label><br>
                    <input type="checkbox" name="sk2" value="">
                    <label for="">Problem Solving</label><br>
                    <input type="checkbox"  name="sk3" value="">
                    <label for="">Team work</label><br>
                    <input type="checkbox"  name="sk4" value="">
                    <label for="">Creativity</label><br>
                    <input type="checkbox" name="sk5" value="">
                    <label for="">Management</label>
                    <input type="checkbox" name="sk6" value="">
                    <label for="">Technology Explorer</label>
            </div>
            <div class="col-md-4">
                    <input type="checkbox"  name="sk7" value="">
                    <label for="">Qiraat</label><br>
                    <input type="checkbox" name="sk8" value="">
                    <label for="">Naat-Khuwan</label><br>
                    <input type="checkbox"  name="sk9" value="">
                    <label for="">Good Speaker</label><br>
                    <input type="checkbox"  name="sk10" value="">
                    <label for="">Multitasking</label><br>
                    <input type="checkbox" name="sk11" value="">
                    <label for="">Time Management</label>
        </div>
            <h4>Communication Skills(Languages)</h4>
            <div class="col-md-4">
                    <input type="checkbox"  name="lang1" value="">
                    <label for="">Arabic</label><br>
                    <input type="checkbox"  name="lang2" value="">
                    <label for="">English</label><br>
                    <input type="checkbox" name="lang3" value="">
                    <label for="">Urdu</label><br>
                    <input type="checkbox"  name="lang4" value="">
                    <label for="">Chinese</label>
                    
            </div>
            <div class="col-md-4">
                    <input type="checkbox"  name="lang5" value="">
                    <label for="">Punjabi</label><br>
                    <input type="checkbox" name="lang6" value="">
                    <label for="">Pashto</label><br>
                    <input type="checkbox" name="lang7" value="">
                    <label for="">Sindhi</label><br>
                    <input type="checkbox" name="lang8" value="">
                    <label for="">Balochi</label><br>
                    <input type="checkbox" name="lang9" value="">
                    <label for="">Other</label>
            </div>
            <div class="container mt-12">
                <button class="btn btn-dark mb-5">Previous</button>
                <button class="btn btn-success mb-5">Next</button>
            </div>
        </div>
        </form>
    </div>
    
@endsection