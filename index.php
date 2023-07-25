<!DOCTYPE html>
<html class="h-full bg-gray-100 m-0">
 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Poster Builder</title>
   <script src="https://cdn.tailwindcss.com"></script>
 </head>
 <body class="h-full m-0 font-sans">
   <div id="app">
    <div class="grid grid-cols-2 gap-10 mx-5">
        <div class="border border-indigo-200 rounded-xl mt-5">
            <div class="-mt-5 mx-3 block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>

                <h1 class="text-xl ml-2">Components</h1>
                
                </div>
            </div>
            <div class="mt-5">
                <div class="border-2 mx-3 rounded p-5 relative hidden" id="headingBlock">

                    <label for="headingInput" class="absolute -top-2 left-3 text-sm bg-gray-200 rounded-md px-2">Heading</label>
            
                    <button id="headingDelete" class="absolute -top-3 -right-3 focus:outline-none text-red-500 bg-white hover:bg-white-500 focus:ring-4 focus:ring-white-300 font-medium rounded-full text-sm px-2 py-1 dark:focus:ring-white-900">
                        X
                    </button>
                   
                    <input type="text" id="headingInput" class="mt-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Dashboard">

                    <div class="flex justify-between">
                    <div class="grid grid-cols-3 bg-white mt-5 w-fit">
                        <div>
                            <input type="radio" name="headingAlignment" id="left" value="left" class="peer hidden" onclick="headingAlignmentChange('left')" />
                            <label for="left" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500 border-r">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="ml-2">
                            Left
                            </span>

                                
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="headingAlignment" id="center" value="center" class="peer hidden" onclick="headingAlignmentChange('center')" />
                            <label for="center" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500 border-r">
                                
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                            </svg>

                            <span class="ml-2">Center</span>
                            
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="headingAlignment" id="right" value="right" class="peer hidden" onclick="headingAlignmentChange('right')" />
                            <label for="right" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                            </svg>

                            <span class="ml-2">Right</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 bg-white mt-5 w-fit">
                        <div>
                            <input type="radio" name="headingColor" id="blue" value="blue" class="peer hidden" onclick="headingColorChange('blue')" />
                            <label for="blue" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500 border-r">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>    
                            <span class="ml-2">Blue</span>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="headingColor" id="black" value="black" class="peer hidden" onclick="headingColorChange('black')" />
                            <label for="black" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500 border-r">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                            </svg>  
                            <span class="ml-2">Black</span>
                            </label>
                        </div>
                        <div>
                            <input type="radio" name="headingColor" id="green" value="green" class="peer hidden" onclick="headingColorChange('green')" />
                            <label for="green" class="flex cursor-pointer select-none p-2 text-center peer-checked:text-blue-500 peer-checked:border peer-checked:border-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                            </svg>
                            <span class="ml-2">Green</span>

                            </label>
                        </div>
                    
                    </div>
                    </div>
                    

                </div>
            </div>
            <div class="mt-5">
                <div class="border-2 mx-3 rounded p-5 relative hidden" id="imageBlock">
                <label for="imageInput" class="absolute -top-2 left-3 text-sm bg-gray-200 rounded-md px-2">Poster Image</label>
                    <button id="imageDelete" class="absolute -top-3 -right-3 focus:outline-none text-red-500 bg-white hover:bg-white-500 focus:ring-4 focus:ring-white-300 font-medium rounded-full text-sm px-2 py-1 dark:focus:ring-white-900">
                        X
                    </button>
                    
                    <div class="flex items-center justify-center w-full mt-5">
                        <label for="imageInput" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="imageInput" type="file" class="hidden" />
                        </label>
                    </div> 

                </div>
            </div>
            <div class="mt-5">
                <div class="border-2 mx-3 rounded p-5 relative hidden" id="descriptionBlock">
                <label for="descriptionInput" class="absolute -top-2 left-3 text-sm bg-gray-200 rounded-md px-2">Description</label>
                    <button id="descriptionDelete" class="absolute -top-3 -right-3 focus:outline-none text-red-500 bg-white hover:bg-white-500 focus:ring-4 focus:ring-white-300 font-medium rounded-full text-sm px-2 py-1 dark:focus:ring-white-900">
                        X
                    </button>
                    <textarea id="descriptionInput" class="mt-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." rows="3"></textarea>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="text-center text-lg font-bold mb-2">
                    Items
                </h1>
                <div class="flex">
        
                    <button id="headingButton" class="flex-auto focus:outline-none bg-yellow-100 text-yellow-500 hover:bg-yellow-200 hover:text-black focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                        Heading
                    </button>
                
                    <button id="imageButton" class="flex-auto focus:outline-none bg-green-100 text-green-500 hover:bg-green-200 hover:text-black focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-green-900">
                        Image
                    </button>
                
                    <button id="descriptionButton" class="flex-auto focus:outline-none bg-blue-100 text-blue-500 hover:bg-blue-200 hover:text-black focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-blue-900">
                        Description
                    </button>
                  
                </div>
            </div>
        </div>
        <div class="border border-indigo-200 rounded-xl mt-5">
            <div class="-mt-5 mx-3  w-100 block p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>

                <h1 class="text-xl ml-2">
                    Preview
                </h1>
                
            </div>

            </div>
            <div class="mt-10 h-[700px] relative">
             
                <h1 id="headingText" class="hidden text-5xl"></h1>
                <img id="imageOutput" class="w-full object-cover object-center mt-5 hidden" src="" alt="">
                <p id="descriptionText" class="mt-5 hidden"></p>
               

                <div class="mt-5 absolute bottom-10 left-5">
                    <button id="downloadButton">
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>
   </div>
 </body>
 <script type="text/javascript" src="js/index.js"></script>
</html>