<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        @keyframes custom-animation {
            0%, 100% {
            top: 8px;
            height: 64px;
        }
        50% {
            top: 24px;
            height: 32px;
        }
    }
      
      .custom-animation {
        animation: custom-animation 1s cubic-bezier(0, 1, 0.5, 1) infinite;
      }
      .custom-animation-delay-long {
        animation-delay: -0.24s;
      }
      
      .custom-animation-delay-short {
        animation-delay: -0.12s;
    }
    </style>
</head>
<body>
    <div id="loading" class="absolute z-99 w-full h-full">
        {{-- <div class="inline-block relative w-80 h-80">
          <div class="absolute left-8 w-16 bg-white custom-animation"></div>
          <div class="absolute left-32 w-16 bg-white custom-animation custom-animation-delay-long"></div>
          <div class="absolute left-56 w-16 bg-white custom-animation custom-animation-delay-short"></div>
        </div> --}}
        <div class="inline-block absolute w-40 h-40 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
            <div class="absolute left-2 w-10 bg-white custom-animation custom-animation-delay-long"></div>
            <div class="absolute left-18 w-10 bg-white custom-animation custom-animation-delay-short"></div>
            <div class="absolute left-35 w-10 bg-white custom-animation"></div>
        </div>
      </div>
</body>
</html>