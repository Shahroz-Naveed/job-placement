@extends('layout.main')
@section('main-section')
@push('title')
<title>Communication Proficiency And Skills</title>
<h1 class="text-center">
<u>Communication Proficiency And Skills</u></h1>
<hr>
    <div class="container">
        <form class="form-group" action="{{url('/')}}/proficiency" method="post">
            @csrf
        <div class="row">
            <h4>Skills</h4>
            <div class="col-md-4">
                    <input type="checkbox"  name="skills[]" value="Critical Thinking">
                    <label for="">Critical Thinking</label><br>
                    <input type="checkbox" name="skills[]" value="Problem Solving">
                    <label for="">Problem Solving</label><br>
                    <input type="checkbox"  name="skills[]" value="Team work">
                    <label for="">Team work</label><br>
                    <input type="checkbox"  name="skills[]" value="Creativity">
                    <label for="">Creativity</label><br>
                    <input type="checkbox" name="skills[]" value="Management">
                    <label for="">Management</label>
                    <input type="checkbox" name="skills[]" value="Technology Explorer">
                    <label for="">Technology Explorer</label>
            </div>
            <div class="col-md-4">
                    <input type="checkbox"  name="skills[]" value="Qiraat">
                    <label for="">Qiraat</label><br>
                    <input type="checkbox" name="skills[]" value="Naat-Khuwan">
                    <label for="">Naat-Khuwan</label><br>
                    <input type="checkbox"  name="skills[]" value="Good Speaker">
                    <label for="">Good Speaker</label><br>
                    <input type="checkbox"  name="skills[]" value="Multitasking">
                    <label for="">Multitasking</label><br>
                    <input type="checkbox" name="skills[]" value="Time Management">
                    <label for="">Time Management</label>
        </div>
            <h4>Communication Skills(Languages)</h4>
            <div class="col-md-4">
                    <input type="checkbox"  name="communication-skills[]" value="Arabic">
                    <label for="">Arabic</label><br>
                    <input type="checkbox"  name="communication-skills[]" value="English">
                    <label for="">English</label><br>
                    <input type="checkbox" name="communication-skills[]" value="Urdu">
                    <label for="">Urdu</label><br>
                    <input type="checkbox"  name="communication-skills[]" value="Chinese">
                    <label for="">Chinese</label>
                    
            </div>
            <div class="col-md-4">
                    <input type="checkbox"  name="communication-skills[]" value="Punjabi">
                    <label for="">Punjabi</label><br>
                    <input type="checkbox" name="communication-skills[]" value="Pashto">
                    <label for="">Pashto</label><br>
                    <input type="checkbox" name="communication-skills[]" value="Sindhi">
                    <label for="">Sindhi</label><br>
                    <input type="checkbox" name="communication-skills[]" value="Balochi">
                    <label for="">Balochi</label><br>
                    <input type="checkbox" name="communication-skills[]" value="Other">
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