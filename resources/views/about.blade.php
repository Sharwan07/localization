<x-layout>
    <x-slot name="title">About Page</x-slot>
    <x-slot name="main">
        <main class="container my-5">
            <h2>{{__('welcome.heading1')}}</h2>
            <h3>{{__('welcome.heading2')}}</h3>
            <p>{{__("welcome.intro",["name"=>"Sharwan Kumawat"])}}</p>

            <div class="mt-4">
                <h4>About This Demo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel dignissim tellus. Morbi sit amet ex ut urna fermentum aliquam. Sed ac lorem non nulla consectetur gravida. Praesent non malesuada libero.</p>

                 </div>
        </main>
    </x-slot>
</x-layout>
