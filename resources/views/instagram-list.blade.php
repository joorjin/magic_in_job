@extends('layouts.master')
@section('title')
اینستاگرام
@endsection

@section('style')
<link rel="stylesheet" href="css/gallery.css">
@endsection

@section('script')

{{-- // load image --}}
<script>
$(document).ready(function () {

    setTimeout(function(){
        var j = 100;
        for (let i = 1; i < 13; i++) {
            setTimeout(function(){
                var srchide = $('#imgtest-'+i).attr("srchide");
                $('#imgtest-'+i).attr("src","instagram_files/img_instagram/"+srchide);
            }, j);
            j = j + 350;
        }
    }, 2000);
});
</script>

@endsection
@section('content')


<!-- center -->
<h2 class="h2insata" style="color: #f2184f;">پست های اینستاگرام ما</h2>
<div class="instagram">
    <br><br><br><br><br><br>

    <div class="gallery">
        @php
            $i = 1;
        @endphp
        @foreach ($instagram as $item)

        <section class="post">
            <article id="gallery-art1" onclick="openlink({{ $item->id }})">
                <div class="hover">
                    <div class="hover">
                    <img id="imgtest-{{ $i }}" srchide="{{ $item->image1 }}" src="images/loading.gif" alt="{{ $item->title }}">
                </div>
            </article>
        </section>

        @php
            $i++;
        @endphp
        @endforeach

    </div>
</div>
<!-- end center -->


<script>
    function openlink(id) {
        setTimeout(function() {
            window.location.assign('insta-post?id='+id);
        }, 500)
    }
</script>





@endsection

