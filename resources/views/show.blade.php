<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All ideas</span></a>
    </div>
    <div class="idea-container bg-white rounded-xl flex ease-in  mt-4">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#" >
                    <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                </a>
            </div>
            <div class=" w-full mx-4 ">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A Random Title</a>
                </h4>
                <div class="text-gray-600 mt-3 ">
                    Lorem ipsum dolor sit amet consectetur . Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex maxime a assumenda aspernatur. Delectus reprehenderit animi autem qui ab iste amet quis doloribus natus placeat repellendus aut est dicta ullam voluptatem sint, sit libero. Est, possimus ipsum? Harum, perspiciatis earum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe iure molestias natus at doloribus animi mollitia iusto totam cumque commodi officiis amet consequuntur error distinctio, earum laudantium sint magni? Eius!
                </div>
                <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div> &bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>

                </div>
            </div>

        </div>
    </div>
    {{-- end idea container --}}
    <div class="buttons-container flex items-center justify-between mt-6">
       <div class="flex items-center space-x-4 ml-6">
        <button
        type="button"
        class="
        flex items-center justify-center w-32 h-11 text-xs bg-blue-500 text-white
        font-bold rounded-xl border border-blue-200 hover:border-blue-400 hover:bg-blue-600
        transition duration-150 ease-in px-6 py-3
        ">
        <span class="">Reply</span>
        </button>

        <button
        type="button"
        class="
        flex items-center justify-center w-38 h-11 text-xs bg-gray-200
        font-bold rounded-xl border border-gray-200 hover:border-gray-300 hover:bg-gray-300
        transition duration-150 ease-in px-6 py-3
        ">
        <span class="">Set Status</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
       </div>

       <div class="flex items-center space-x-3">

        <div class="bg-white font-semibold text-center rounded-xl px-3.py-2">
            <div class="text-xl-leading-snug">12</div>
            <div class="text-gray-400 text-xs leading-none">Votes</div>
        </div>
            <button
            type="button"
            class="w-32 h-11 text-xs bg-gray-200 font-bold uppercase rounded-xl border border-gray-200 hover:border-gray-300 hover:bg-gray-300 transition duration-150 ease-in px-6 py-3">
            <span>Vote</span>
            </button>

       </div>
    </div>
        {{-- end comments-container  --}}
    <div class="comments-contauner space-y-6 ml-20 my-8">
        <div class="comment-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                    </a>
                </div>
                <div class=" w-full mx-4 ">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur .
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="comment-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="w-8 h-8 bg-indigo-400 rounded-full">.</div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                    </a>
                    <div class="font-bold text-blue-500 text-xxs uppercase my-2 text-center">Admin</div>
                </div>
                <div class=" w-full mx-4 ">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed to "UC"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur .
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                            <div class="font-bold text-blue-500 ">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        </div>

                </div>
            </div>
        </div>
        <div class="comment-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                    </a>
                </div>
                <div class=" w-full mx-4 ">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur .
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="comment-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#" >
                        <img src="https://images.unsplash.com/photo-1509460913899-515f1df34fea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjI0OTk2MjM1&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200" alt="avatar" class="w-14 h-14 rounded-xl flex-none ">
                    </a>
                </div>
                <div class=" w-full mx-4 ">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A Random Title</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3 hover:line-clamp-1">
                        Lorem ipsum dolor sit amet consectetur .
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2 ">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
