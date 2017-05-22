@extends('layouts.master')

@section('title')
    <title>Reddit2: </title>
@stop

@section('content')

    <h1 class="text-center">Posts</h1>
    
    <br>

    <section>
        
        @for($i = 0; $i < 10; ++$i)

            <article class="row">
                <div class="col-md-4">
                    <img src="http://nintendotoday.com/wp-content/uploads/2015/10/Sonic-2-2013-EHZ.jpg" width="100%">
                </div> 
                <div class="col-md-8">
                    <h3><em>This is a Title</em></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <button>Continue Reading</button>
                </div>
            </article>
            <hr>
        @endfor

    </section>

@stop

@section('pageCSS')

    <style type="text/css">

        .articleElement {
            float: left;
        }

        h3 {
            
        }

    </style>

@stop

@section('pageJS')

    <script type="text/javascript">
        
        
    </script>

@stop