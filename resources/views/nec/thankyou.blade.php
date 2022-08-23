@extends('layouts.app')

@section('pageTitle')
{{ 'Thankyou | ' . config('app.name') }}
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
                    <h4>We have submitted your information for a Fast, Free Case Review!</h4>
                    <h4 class="minHeight">What year was your baby born?</h4>
                    <ul class="btnBox">
                        <li><img src="{{ asset('/img/Selected.png') }}" alt="btn"></li>    
                        <li class="fs-4">Expect to hear from one our qualified attorneys shortly regarding your case.</li>
                    </ul>
                    <div id="msgdiv" class="text-success">This site is 100% secure and confidential </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts') 
<script>

</script>
@stop
