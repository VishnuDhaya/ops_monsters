<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css') }}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <!-- Header section -->
    @include('layouts.includes.header')

    <!-- Main section -->
    @section('main-content')
        <section>
            
        </section>
    @show

    <!-- Footer section -->
    @include('layouts.includes.footer')


   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



    <script>

        var words = ['Web. Mobile. Software.', 'Digitally & Truly Yours', 'Fast and Reliable', 'Technology Made Simple.'],
            part,
            i = 0,
            offset = 0,
            len = words.length,
            forwards = true,
            skip_count = 0,
            skip_delay = 15,
            speed = 70;
        var wordflick = function () {
          setInterval(function () {
            if (forwards) {
              if (offset >= words[i].length) {
                ++skip_count;
                if (skip_count == skip_delay) {
                  forwards = false;
                  skip_count = 0;
                }
              }
            }
            else {
              if (offset == 0) {
                forwards = true;
                i++;
                offset = 0;
                if (i >= len) {
                  i = 0;
                }
              }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
              if (forwards) {
                offset++;
              }
              else {
                offset--;
              }
            }
            $('.word').text(part);
          },speed);
        };
        
        $(document).ready(function () {
          wordflick();
        });
        
        
        </script> 
</body>
</html>