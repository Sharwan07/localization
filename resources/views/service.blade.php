<x-layout>
    <x-slot name="title">Service Page</x-slot>
    <x-slot name="main">
        <main class="container my-5">
            <h2>{{__('welcome.heading1')}}</h2>
            <h3>{{__('welcome.heading2')}}</h3>
            <p>{{__("welcome.intro",["name"=>"Sharwan Kumawat"])}}</p>

            <div class="mt-4">

                <h4>Services We Offer</h4>
                <p>Vestibulum sit amet justo sit amet erat aliquet laoreet. Nullam vehicula nunc sed purus fermentum tincidunt. Curabitur malesuada, sapien in laoreet congue, urna augue porta lorem, ac lacinia libero elit sed lacus.</p>

                </div>
        </main>
    </x-slot>
</x-layout>
