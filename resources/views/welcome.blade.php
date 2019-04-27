@extends('layouts.app')

@section('layoutawal')
<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
    <div class="box">
        <h2>Fill this form! </h2>
        <form action="/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" placeholder="Enter Name" value="{{$value[0]}}" required @if (!empty($value[0])) readonly disabled @endif>
            </div>
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" name="Email" class="form-control" placeholder="Enter Email" value="{{$value[1]}}" required @if (!empty($value[1])) readonly disabled @endif>
            </div>
            <label for="Date">Birth Date</label>
            <div class="form-group" data-date-format="dd-mm-yyyy">
                <input class="form-control date" name="Date" type="text" placeholder="Enter Birth Date" value="{{$value[2]}}" required @if (!empty($value[2])) readonly disabled @endif>
            </div>
            <div class="form-group">
                <label for="inputState">Phone Number</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+62</span>
                    </div>
                    <input type="number" name="Phone" class="form-control" placeholder="Enter Number" minlength="5" value="{{$value[3]}}" required @if (!empty($value[3])) readonly disabled @endif>
                </div>
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select id="inputState" class="form-control" name="Gender" value="{{$value[4]}}" required @if (!empty($value[0])) readonly disabled @endif>
                    @if ($value[4]=="") <option disabled selected value> -- Select a Gender -- </option>
                    <option>
                        Male
                    </option>
                    <option>
                        Female
                    </option>
                    @endif
                    @if ($value[4]=="Male" ) <option disabled selected>
                        Male
                    </option> @endif
                    @if ($value[4]=="Female" ) <option disabled selected>
                        Female
                    </option> @endif
                </select>
            </div>
            <div class="form-group">
                <label for="inputState">Address</label>
                <div class="input-group">
                    <input type="text" name="Address" class="form-control" placeholder="Enter Address" value="{{$value[5]}}" required @if (!empty($value[5])) readonly disabled @endif>
                </div>
            </div>

            @if ($value[0]=="")
            <button type="reset" id="resetbutton" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            @endif

        </form>
    </div>
</div>
<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
    <img class="imagelayout" src="{{ asset('img/form.png') }}" rel="stylesheet">
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#resetbutton').click(function() {
            $('.form-control').removeAttr("");
        });
        $('.date').datepicker({

            format: 'mm-dd-yyyy'

        });
    });
</script>

@endsection


<!-- nama, email, date of birth, no telepon, gender (male/female - default belum terpilih) dan alamat, -->