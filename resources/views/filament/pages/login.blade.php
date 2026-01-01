<div class="login">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>  
    <style>
        .video-container video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

         .video-container img.background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .login .head-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            margin-top: -70px;
        }

        .login .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;


            max-width: 400px;
            background-color: rgba(235, 217, 217, 0.221);
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(4px);

            padding: 2rem 3rem;
        }
    </style>

    <div class="video-container">
        <!-- <video autoplay loop muted playsinline>
            <source src="../assets/bg/bg20.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video> -->
        <img src="{{ url('/') }}/assets/background.jpg" class="background absolute inset-0 w-full h-full object-cover z-0" alt="Background image">
        
        <div class="head-content flex flex-col flex-wrap items-center justify-center">
            <div>
                <img alt="logo" src="{{ url('assets/logo.jpg') }}" style="width: 150px;height: 150px;" class="fi-logo p-1">
            </div>
            <div class="text-3xl font-bold">
                {{ env('APP_NAME') }}
            </div>
        </div>
        
        <div class="content">

            {{ $this->content }}

        </div>

    </div>
</div>