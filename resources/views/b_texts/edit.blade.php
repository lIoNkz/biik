@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            B Text
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                <form action="/btexts/update_text/{{ $bText->id }}/{{ $block_id }}" method="POST">

                        @include('b_texts.fields')
                        {{ csrf_field() }}
                </form>
               </div>
           </div>
       </div>
   </div>
@endsection