@extends('layouts.master')


@section('style')
<link rel="stylesheet" href="css/blog.css">
@endsection




@section('content')


 <br><br><br><br><br><br><br>
    @foreach ($blog as $item)
@section('title')
{{ $item->title }}
@endsection

        <!-- img post -->
            <div class="image-blog">
                <img src="blog_files/img_blog/{{ $item->image }}" alt="{{ $item->title }}">
            </div>
        <!-- end img -->
        <!-- section -->
        <div class="section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="heading_main">
                            <div class="right" >
                                <p class="small_tag"> <br>
                                موضوع مقاله:</p>
                                <h2><span class="theme_color">{{ $item->title }}</span> </h2>
                            </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
        
            <article class="blog-text">


                    @php
                       $text= $item->text;
                       $text=str_replace('{','<div class="quotation"> <i class="fa fa-quote-right"></i>',$text);
                       $text=str_replace("}",'<i class="fa fa-quote-left"></i></div>',$text);
                       echo($text);
                    @endphp

            </article>

        @endforeach
    @endsection
    