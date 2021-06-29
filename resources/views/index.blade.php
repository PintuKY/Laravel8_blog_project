@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">

    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    Dou You Want to become a developer
            </h1>
            <a href="/blog" class="text-center bg-blue-500 text-red-700 py-2 px-2 font-bold text-xl uppercase">
             Read More                
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-25 max-auto py-15 border-b border-gray-200">
   
    <div>
        <img src="https://cdn.pixabay.com/photo/2021/06/07/16/50/woman-6318447_960_720.jpg">

    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>

        <p class="py-8 text-gray-500 text-l">
            Lorem , ipsum dolor sit amet consectretur adipisicing elit Voluptatibus.
        </p>
        <p class="font-extrabold text-gray-600 text-l pb-9">
            lorem ipsum, dilor sit amet consectetur adipisicing elit Sapiente manage vero nostrum preferendis eos molestias
        </p>

        <a href="/blog" class="bg-blue-500 text-black-100 font-extrabold text-s py-3 px-8 rounded-3xl uppercase">
             Find Out More                
         </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I, am expert in....
    </h2>
    <span class="font-extrabold block text text-4xl py-1">
         design
    </span>
    <span class="font-extrabold block text text-4xl py-1">
         Php Laravel Developer
    </span>
    <span class="font-extrabold block text text-4xl py-1">
         Php Oops
    </span>
    <span class="font-extrabold block text text-4xl py-1">
         Php Basic
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        recent posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        comque exercitationem saepe enim varitatis, eos temporibus auaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">PHP</span>
            <h3 class="text-xl font-bold py-10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            comque exercitationem saepe enim varitatis, eos temporibus auaerat facere consectetur qui.
            </h3>

            <a href="/blog" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                find out More
            </a>
        </div>
    </div>
    <div>
         <img src="https://cdn.pixabay.com/photo/2021/06/07/16/50/woman-6318447_960_720.jpg">
    </div>
</div>
   
@endsection