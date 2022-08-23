@extends('layouts.app')

@section('pageTitle')
{{ 'Question 1 | ' . config('app.name') }}
@endsection
@section('content')
<section class="bg-white">
    <div class="container-fliud">
        <div class="row-cols-1">
            <div class="formHolder">
                <div class="formHeader">
                    <h4>Baby Formula Linked to Deadly Necrotizing Enterocolitis (NEC)</h4>
                </div>
                <div class="formBody">
                    <h4>See If You Qualify</h4>
                    <div class="indicator"><img src="{{ asset('/img/Indicator_1.png') }}" alt="indicator"></div>
                    <h4 class="minHeight">Was your baby diagnosed with Necrotizing Enterocolitis (NEC)?</h4>
                    <ul class="btnBox">
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-Yes"><img src="{{ asset('/img/Not-selected.png') }}" alt="btn">YES</a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-NotSure"><img src="{{ asset('/img/Not-selected.png') }}" alt="btn">Not sure</a></li>
                        <li><a href="javascript:void(0)" class="btn btn-success" id="a-No"><img src="{{ asset('/img/Not-selected.png') }}" alt="btn">NO</a></li>
                    </ul>
                    <div id="msgdiv" style="display:none;"></div>
                    @csrf
                    @include('includes.footnotes')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts') 
<script>
$(function(){
    $("a#a-{{ \Session::get('ques1') }}").children('img').prop('src', "{{ asset('/img/Selected.png') }}");
    $('a[id^="a-"]').on('click', function(){
        var ans = $(this).prop('id').replace('a-', '');
        if(ans == 'Yes') {
            $('a#a-Yes').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
            $('a#a-No').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            $('a#a-NotSure').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
        } else if(ans == 'No') {
            $('a#a-Yes').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            $('a#a-NotSure').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            $('a#a-No').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
        } else {
            $('a#a-No').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            $('a#a-Yes').children('img').prop('src', "{{ asset('/img/Not-selected.png') }}");
            $('a#a-NotSure').children('img').prop('src', "{{ asset('/img/Selected.png') }}");
        }

        var arg = '_token='+$('input[name="_token"]').val()+'&ques1='+ans+'&ques=ques1';
        // alert(arg);return false;
        $.ajax({
            url: "{{ route('nec.submitques') }}",
            type: "POST",
            data: arg,
            timeout: 50000,
            cache: false,
            success: function (html) {
                if (html.sms == 1) {
                    window.location = "{{ route('nec.ques1') }}";
                } else {
                    $('div#msgdiv').prop('class', 'alert alert-danger');
                    $('div#msgdiv').html('Updation failed. Please try after some time.');
                    $("div#msgdiv").fadeIn(100);
                    var et = setTimeout('$("div#msgdiv").fadeOut(100)', 5000);
                }
                return false;
            },
            error: function (jqXHR, exception)
            {
                    var msg = '';
                    $('div#msgdiv').prop('class','alert alert-danger');
                    if (jqXHR.status === 0) {
                            msg = 'Not connect. Verify Network.';
                    } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                    } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                    } else {
                            msg = 'Uncaught Error ' + jqXHR.responseText;
                    }
                    $('div#msgdiv').fadeIn(100);
                    $('div#msgdiv').html(msg);
                    var et = setTimeout('$("div#msgdiv").fadeOut(100)', 4000);
                    return false;
            }
        });
    });
});
</script>
@stop
