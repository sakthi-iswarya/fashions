@extends('layouts.layout')
@section('content')
<div class="row">
<div class="col-lg-2"></div>
<div class="col-lg-8 colorrr">
 <form action="{{route('insert_form')}}" method="POST" enctype="">
  @csrf
  <div class="ref-id">
    <label for="Custom01" ><b>Name:</b></label>
    <input type="text" class="" id="Custom01" value="" name="f_name">
  </div>
  <div class="prod-name">
    <label for="Custom2" ><b>Password:</b></label>
    <input type="text" class="" id="Custom02" value="" name="f_pass">
  </div>
  <div class="prod-quan">
    <label for="Custom03" ><b>Email:</b></label>
    <input type="text" class="" id="Custom03" value="" name="f_mail"> 
  </div>
  <div class="prod-stock">
    <label for="Custom04" ><b>Number:</b></label>
    <input type="text" class="" id="Custom04" value="" name="f_num">
  </div>
  <div class="prod-color">
    <label for="Custom05" ><b>Date of Birth:</b></label>
    <input type="text" class="" id="Custom05" value="" name="f_birth">
  </div>
  <div class="prod-brand">
    <label for="Custom06" ><b>Address:</b></label>
    <input type="text" class="" id="Custom06" value="" name="f_add">
  </div>
  <div class="prod-price">
    <label for="Custom07" ><b>Date:</b></label>
    <input type="text" class="" id="Custom07" value="" name="f_date">

  </div>
  <div class="submit">
    <button type="submit"><b>SUBMIT</b></button>
  </div>

 </form>
</div>
</div>

@endsection


