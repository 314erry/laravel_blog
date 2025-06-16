@extends('main')

@section('title', "| Contact")

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label name="email">Email: </label>
                <input class="form-control" type="text" name="email" id="email">
            </div>

            <div class="form-group">
                <label name="subject">Subject: </label>
                <input class="form-control" type="text" name="subject" id="subject">
            </div>

            <div class="form-group">
                <label name="message">Message: </label>
                <textarea class="form-control" type="text" name="message" id="message">Type your text here...</textarea>
            </div>

            <button type="button" class="btn btn-success" name="subm    it" id="submit">Send Message</button>
        </form>
    </div>
@endsection