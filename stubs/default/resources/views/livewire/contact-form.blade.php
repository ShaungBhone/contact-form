<div>
    <div class="bg-gray-100 subpixel-antialiased">
        <div class="flex w-full min-h-screen justify-center items-center">
            <div
                class="flex flex-col space-y-6 md:space-x-6 md:space-y-0 md:flex-row bg-blue-400 w-full max-w-4xl p-8 rounded-lg shadow-lg text-white">
                <div class="flex flex-col justify-between space-y-8">
                    <div>
                        <h1 class="font-bold text-4xl tracking-wide">Send us an Email</h1>
                        <p class="pt-2 text-sm text-gray-200">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Eaque eum
                            suscipit optio ea minima
                            voluptatibus ullam sed odio possimus quibusdam.</p>
                    </div>
                    <div>
                        <div class="flex flex-col space-y-6">
                            <div class="inline-flex space-x-2 items-center">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>
                                    +(959) 792 198 59
                                </span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>
                                    shaungbhone.business@gmail.com
                                </span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>
                                    Yangon, Myanmar
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 text-gray-800 md:w-4/5">
                    <form method="POST" action="/contact" class="flex flex-col space-y-4">
                        @csrf
                        <div>
                            <label for="name" class=" text-sm">Your name</label>
                            <input wire:model="name" class="w-full rounded-md px-4 py-2 mt-2 outline-none" type="text"
                                placeholder="Your name" name="name" value="{{ old('name') }}">
                        </div>
                        <div>
                            <label for="email" class=" text-sm">Your Email</label>

                            <input class="w-full rounded-md px-4 py-2 mt-2 outline-none" type="text"
                                placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                        </div>
                        <div>
                            <label for="phone" class=" text-sm">Phone</label>

                            <input class="w-full rounded-md px-4 py-2 mt-2 outline-none" type="text"
                                placeholder="Phone number" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div>
                            <label for="message" class=" text-sm">Message</label>

                            <textarea rows="4" class="w-full rounded-md px-4 py-2 mt-2 outline-none" type="text"
                                placeholder="Message" name="message" value="{{ old('message') }}"></textarea>
                        </div>
                        <button type="submit"
                            class="inline-block self-end bg-blue-500 text-white font-bold rounded-lg px-6 py-2 uppercase focus:outline-none hover:bg-blue-400">Send
                            message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
