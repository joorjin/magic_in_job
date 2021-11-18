@extends('layouts.master')
@section('title')
بلاگ
@endsection

@section('style')
<link rel="stylesheet" href="css/blog-list.css">
@endsection



@section('content')
 <br><br><br><br><br><br><br>

 @php
 function convertToPersianNumber($str){
     $english = array('0','1','2','3','4','5','6','7','8','9');
     $persian = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
     $convertedStr = str_replace($english, $persian, $str);
     echo($convertedStr);
 }
@endphp

<!-- center -->
<div class="center-blog-list">

    <div class="tag-sel">
        <select name="tag" id="tag" onchange="location=this.value;">
            <?php $tag = []; $i = 0 ?>
            @foreach ($blog as $item)
                <?php 
                    $tag[$i]= $item->tag;
                    $filter_tag = array_unique($tag);
                    $i++; 
                ?>
            @endforeach
            <?php
            $filter_tag = array_values($filter_tag);
               $count_filter_tag = count($filter_tag); 
               ?>
                <option value="/blog">انتخاب دسته بندی</option>
               <?php
              for ($i=0; $i < $count_filter_tag ; $i++) { 
                ?>  
                <option value="/blog/<?php echo(str_replace(" ", "-",$filter_tag[$i])); ?>"> {{ $filter_tag[$i] }}</option>
        
            <?php } ?>
        </select>
    </div>
    <div class="all">
@foreach ($blog as $item)
<!-- start post -->
    <div class="post">
        <a href="../blog-post?id={{ $item->id }}"">
            <img src="../blog_files/img_blog/{!! $item->image !!}" alt="{{ $item->title }}">
        </a>

        @php
            $tag = $item->tag;
            $tag = str_replace(" ", "-", $tag);
        @endphp
             <div class="tag">
                <a href="../blog/{{ $tag }}">{{ $item->tag }}</a>
            </div>

        <div class="text">
            <a href="../blog-post?id={{ $item->id }}""><h2>{!! $item->title !!}</h2></a>
        </div>
        <div class="time">
        @php
            $zaman=$item->created_at;
            $zaman=new Verta($zaman);
            
        @endphp
            <p id="year">/<?php convertToPersianNumber($zaman->year) ?></p>
            <p id="month">/<?php convertToPersianNumber($zaman->month) ?></p>
            <p id="day"><?php convertToPersianNumber($zaman->day) ?></p>
        </div>
        
    </div>
<!-- end post -->
@endforeach

    </div>
    <style>
        .justify-between{
    
            width: 250px;
            height: 50px;
            margin: 0 auto;
        }
    </style>
        {{ $blog->links() }}
</div>
<!-- end center -->


@endsection