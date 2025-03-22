<x-layout>
    <x-slot name="title">Contact Page</x-slot>
    <x-slot name="main">
        <main class="container my-5">
            <h2>{{__('welcome.heading1')}}</h2>
            <h3>{{__('welcome.heading2')}}</h3>
            <p>{{__("welcome.intro",["name"=>"Sharwan Kumawat"])}}</p>

            <div class="mt-4">

                <h4>Contact Us</h4>
                <p>Donec placerat nisi at enim viverra, in ultricies orci facilisis. Sed finibus, nibh sed tincidunt laoreet, nunc ex consequat velit, at tincidunt nisl erat nec augue.</p>
            </div>
        </main>
    </x-slot>
</x-layout>
