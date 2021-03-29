<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>

<!-- component -->
<div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
    <div class="container mx-auto">
        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <h2 class="text-2xl text-gray-900">Create indeks</h2>
            <form method="POST" action="{{route('indeks.update', $indek)}}"  class="mt-6 border-t border-gray-400 pt-4" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>header_category</label>
                        <input name="header_category" value="{{$indek->header_category}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='header_category' >
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>header_reklamacja</label>
                        <input name="header_reklamacja" value="{{$indek->header_reklamacja}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='header_reklamacja'>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >header_reklamacja_link</label>
                        <textarea name="header_reklamacja_link" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='header_reklamacja_link'  >{{$indek->header_reklamacja_link}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >header_block_1</label>
                        <textarea name="header_block_1" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='header_block_1'  >{{$indek->header_block_1}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >header_block_2</label>
                        <textarea name="header_block_2" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='header_block_2' >{{$indek->header_block_2}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >header_block_3</label>
                        <textarea name="header_block_3" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='header_block_3' >{{$indek->header_block_3}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >header_block_4</label>
                        <textarea name="header_block_4" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='header_block_4' >{{$indek->header_block_4}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >text_under_image_reklamacja</label>
                        <textarea name="text_under_image_reklamacja" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='text_under_image_reklamacja' >{{$indek->text_under_image_reklamacja}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >text_under_image_reklamacja_link</label>
                        <textarea name="text_under_image_reklamacja_link" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='text_under_image_reklamacja_link' >{{$indek->text_under_image_reklamacja_link}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_1_link</label>
                        <textarea name="sidebar_image_reklamacja_1_link" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_1_link' >{{$indek->sidebar_image_reklamacja_1_link}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_1_text</label>
                        <textarea name="sidebar_image_reklamacja_1_text" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_1_text' >{{$indek->sidebar_image_reklamacja_1_text}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_2_link</label>
                        <textarea name="sidebar_image_reklamacja_2_link" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_2_link' >{{$indek->sidebar_image_reklamacja_2_link}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_2_text</label>
                        <textarea name="sidebar_image_reklamacja_2_text" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_2_text' >{{$indek->sidebar_image_reklamacja_2_text}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_2_percent</label>
                        <textarea name="sidebar_image_reklamacja_2_percent" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_2_percent' >{{$indek->sidebar_image_reklamacja_2_percent}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >sidebar_image_reklamacja_1_percent</label>
                        <textarea name="sidebar_image_reklamacja_1_percent" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white' id='grid-text-1' type='text' placeholder='sidebar_image_reklamacja_1_percent' >{{$indek->sidebar_image_reklamacja_1_percent}}</textarea>
                    </div>


                    <div class="flex w-full jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">image_reklamacja</span>
                            <input type='file' name="image_reklamacja" class="hidden" />
                        </label>
                    </div>

                    <div class="flex w-full   jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">sidebar_image_reklamacja_1</span>
                            <input type='file' name="sidebar_image_reklamacja_1" class="hidden" />
                        </label>
                    </div>

                    <div class="flex w-full   jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">sidebar_image_reklamacja_2</span>
                            <input type='file' name="sidebar_image_reklamacja_2" class="hidden" />
                        </label>
                    </div>

                    <div class="personal w-full border-t border-gray-400 pt-4">
                        <div class="submit">
                            <button type="submit"  class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
