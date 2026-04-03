<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevPortfolio | Creative Student</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>
    
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        navy: '#003049',
                        fire: '#D62828',
                        orange: '#F77F00',
                        honey: '#FCBF49',
                    },
                    animation: {
                    'blob': 'blob 10s infinite ease-in-out', 
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(80px, -100px) scale(1.3)' }, 
                            '66%': { transform: 'translate(-60px, 40px) scale(0.8)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Animasi tambahan untuk typing cursor */
        .cursor-blink { animation: blink 1s infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: floating 3s ease-in-out infinite;
        }
        .delay-1 { animation-delay: 0.5s; }
        .delay-2 { animation-delay: 1s; }
    </style>
</head>
<body class="bg-slate-50 text-navy overflow-x-hidden relative">

    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-white via-slate-50 to-honey/10"></div>
        <div class="absolute top-0 -left-4 w-72 h-72 bg-honey rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-orange rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob [animation-delay:2s]"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-fire rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob [animation-delay:4s]"></div>
    </div>

    @include('components.navbar')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

</body>
</html>