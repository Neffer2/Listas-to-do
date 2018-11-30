@extends('layouts.app')

@section('content')

<LINK REL=StyleSheet HREF="css/Style.css" TYPE="text/css" MEDIA=screen>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>
@endsection
