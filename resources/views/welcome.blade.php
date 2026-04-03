@extends('layouts.app')

@section('content')
    <section class="flex flex-col lg:flex-row items-center justify-between py-12 md:py-24 gap-12 relative" x-data="{ mouseX: 0, mouseY: 0 }" @mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
        
        <div class="w-full lg:w-3/5 text-center lg:text-left order-2 lg:order-1 relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-[#003049] leading-none tracking-tighter">
                I'm <span class="text-[#D62828]">Faizul 'Afiat</span>,<br>
                <span class="text-[#F77F00]" x-data="{ 
                    text: '', 
                    messages: ['CS Student.', 'Web Developer.', 'Laravel Enthusiast.'],
                    mIdx: 0,
                    charIdx: 0,
                    type() {
                        if (this.charIdx < this.messages[this.mIdx].length) {
                            this.text += this.messages[this.mIdx].charAt(this.charIdx);
                            this.charIdx++;
                            setTimeout(() => this.type(), 100);
                        } else {
                            setTimeout(() => this.erase(), 2000);
                        }
                    },
                    erase() {
                        if (this.charIdx > 0) {
                            this.text = this.text.substring(0, this.charIdx - 1);
                            this.charIdx--;
                            setTimeout(() => this.erase(), 50);
                        } else {
                            this.mIdx = (this.mIdx + 1) % this.messages.length;
                            setTimeout(() => this.type(), 500);
                        }
                    }
                }" x-init="type()">
                    <span x-text="text"></span><span class="animate-pulse">|</span>
                </span>
            </h1>
            <p class="mt-8 mb-0 text-xl md:text-2xl text-gray-700 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-medium">
                Turning complex problems into elegant, user-centric digital solutions.
            </p>
            
            <div class="mt-6 text-center lg:text-left">
                <div class="flex gap-6 mb-6 justify-center lg:justify-start items-center">
                    <div class="group flex flex-col items-center">
                        <i class="fa-brands fa-php text-4xl text-navy opacity-60 group-hover:text-[#4F5B93] group-hover:opacity-100 transition duration-300 animate-float delay-1"></i>
                        <span class="text-[10px] font-bold mt-1 text-navy/40 uppercase tracking-tighter">PHP</span>
                    </div>
                    
                    <div class="group flex flex-col items-center">
                        <i class="fa-brands fa-golang text-4xl text-navy opacity-60 group-hover:text-[#00ADD8] group-hover:opacity-100 transition duration-300 animate-float delay-2"></i>
                        <span class="text-[10px] font-bold mt-1 text-navy/40 uppercase tracking-tighter">Golang</span>
                    </div>

                    <div class="group flex flex-col items-center">
                        <i class="fa-brands fa-laravel text-4xl text-navy opacity-60 group-hover:text-fire group-hover:opacity-100 transition duration-300 animate-float delay-3"></i>
                        <span class="text-[10px] font-bold mt-1 text-navy/40 uppercase tracking-tighter">Laravel</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                    <a href="#projects" class="bg-navy text-white px-10 py-5 rounded-2xl font-black text-lg hover:bg-fire transition duration-300 shadow-xl">
                        Explore My Work
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-2/5 order-1 lg:order-2 flex justify-center relative" 
             :style="`transform: translate(${mouseX / 100}px, ${mouseY / 100}px)`">
            <div class="relative w-72 h-72 md:w-96 md:h-96 group">
                <div class="absolute -inset-4 border-4 border-dashed border-[#F77F00]/50 rounded-full animate-spin [animation-duration:20s] group-hover:opacity-100 opacity-50 transition"></div>
                
                <div class="absolute inset-0 bg-[#F77F00] rounded-full rotate-12 scale-105 opacity-80 shadow-2xl"></div>
                <div class="absolute inset-0 bg-[#003049] rounded-full -rotate-6 scale-100 border-8 border-white shadow-xl overflow-hidden flex items-center justify-center">
                    <div class="absolute inset-0 opacity-10 grid grid-cols-4 gap-4 p-8 animate-pulse">
                        @for($i = 0; $i < 16; $i++)
                            <div class="w-8 h-8 bg-white rounded-md"></div>
                        @endfor
                    </div>
                    <span class="text-9xl font-black text-[#FCBF49]/20 font-mono">CS</span>
                </div>
            </div>
        </div>
    </section>
@endsection