@extends('layouts.main')
@section('content')
<divc class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-20 flex flex-col md:flex-row">
        <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                    <path
                        d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                    </path>
                </svg>
                <span class="ml-1">85%</span>
                <span class="ml-2">|</span>
                <span class="ml-2">Sept 06, 2020</span>
                <span class="ml-2">|</span>
                <span>Action, Thriller, Drama</span>
            </div>
            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum pariatur vero tempora, odit maiores
                accusantium cupiditate commodi numquam doloribus beatae sint? Ratione quibusdam quam minima! Quasi quia
                voluptas unde vero.
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Bong Joon-ho</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                </div>
                <div class="flex mt-8">
                    <div>
                        <div>Han Jin-won</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <button
                    class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-5 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                    </svg>
                   <a href="https://www.youtube.com/watch?v=5xH0HfJHsaY">Play Trailler</a></button>
            </div>
        </div>
    </div>
    </div><!-- end movie info ---------->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Casts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor1.jpg" alt="actor1"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-2"> John Smith
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor2.jpg" alt="actor2"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <div class="text-gray-400 text-sm">
                                John Smith
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor3.jpg" alt="actor3"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <div class="text-gray-400 text-sm">
                                John Smith
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor4.jpg" alt="actor4"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <div class="text-gray-400 text-sm">
                                John Smith
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor5.jpg" alt="actor5"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <div class="text-gray-400 text-sm">
                                John Smith
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Movie cast ends here -->

            <div class="movie-cast border-b border-gray-800">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Image</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image1.jpg" alt="image1"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image2.jpg" alt="image2"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image3.jpg" alt="image3"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image4.jpg" alt="image4"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image5.jpg" alt="image5"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/image1.jpg" alt="image5"
                                    class="hover:opacity-75 transition-ease-in-out-duration-150">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection