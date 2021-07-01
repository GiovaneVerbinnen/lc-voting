<x-app-layout>

    <div class="filters flex space-x-6">
        <div class="w-1/3 ">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="one">Category one</option>
                <option value="one">one</option>
                <option value="one">one</option>
                <option value="one">one</option>
            </select>
        </div>
        <div class="w-1/3 ">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none" >
                <option value="one">Other Filters</option>
                <option value="one">one</option>
                <option value="one">one</option>
                <option value="one">one</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl px-4 py-2 pl-8 border-none ">
            <div class="absolute top-0 flex items-center h-full ml-2.5">
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

    </div>
    {{-- end-filters --}}

    <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border-2 border-gray-200 hover:border-gray-400  transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button></div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div> &bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition-duration-150 ease-in">Open</div>
                                <button class="bg-gray-100 rounded-full w-20 h-7 text-gray-500 px-3 py-2 hover:bg-gray-200 transition-duration-150 ease-in relative ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-8 absolute top-0 flex items-center ml-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                      </svg>
                                      <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg py-3 rounded-xl ml-12">
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> Mark as Spam </a></li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 1 </a>  </li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 2 </a></li>
                                      </ul>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border-2 border-gray-200 hover:border-gray-400  transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button></div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div> &bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition-duration-150 ease-in">Open</div>
                                <button class="bg-gray-100 rounded-full w-20 h-7 text-gray-500 px-3 py-2 hover:bg-gray-200 transition-duration-150 ease-in relative ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-8 absolute top-0 flex items-center ml-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                      </svg>
                                      <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg py-3 rounded-xl ml-12">
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> Mark as Spam </a></li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 1 </a>  </li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 2 </a></li>
                                      </ul>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border-2 border-gray-200 hover:border-gray-400  transition duration-150 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button></div>
            </div>
            <div class="flex px-2 py-6">
                <a href="" class="flex-none">
                    <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic unde recusandae, deleniti veniam alias excepturi labore illo doloremque ad facilis quibusdam obcaecati, odit commodi consequatur dolores nihil, neque exercitationem aliquam?
                    </div>
                    <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                                <div>10 hours ago</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div> &bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 hover:bg-gray-300 transition-duration-150 ease-in">Open</div>
                                <button class="bg-gray-100 rounded-full w-20 h-7 text-gray-500 px-3 py-2 hover:bg-gray-200 transition-duration-150 ease-in relative ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-8 absolute top-0 flex items-center ml-3 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                      </svg>
                                      <ul class="absolute w-44 text-left font-semibold bg-white shadow-lg py-3 rounded-xl ml-12">
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> Mark as Spam </a></li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 1 </a>  </li>
                                          <li><a href="#" class="hover:bg-gray-100 transition-duration-150 ease-in py-3 px-5 block"> 2 </a></li>
                                      </ul>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
