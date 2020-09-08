@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movie">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movie</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/joker.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/sonic.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the Hedgehog</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/frozen2.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Frozen II</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/joker.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/sonic.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the...</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/frozen2.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Frozen II</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/img/joker.jpg" alt="parasite"
                        class="hover:opacity-75 transition-ease-in-out-duration-150">
                </a>
                <div class="div mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                            <path
                                d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                            </path>
                        </svg>
                        <span class="ml-1">85%</span>
                        <span class="ml-2">|</span>
                        <span class="ml-2">Sept 06, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end popular movie----------->

    <div class="container mx-auto px-4 pt-16">
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the Hedgehog</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Frozen II</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/sonic.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Sonic the...</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/frozen2.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Frozen II</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/joker.jpg" alt="parasite"
                            class="hover:opacity-75 transition-ease-in-out-duration-150">
                    </a>
                    <div class="div mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Joker</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 20 20">
                                <path
                                    d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z">
                                </path>
                            </svg>
                            <span class="ml-1">85%</span>
                            <span class="ml-2">|</span>
                            <span class="ml-2">Sept 06, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection