<x-layout>
    <x-slot name="title">Home Page</x-slot>
    <x-slot name="main">
        <main class="container my-5">
            <h2>{{__('welcome.heading1')}}</h2>
            <h3>{{__('welcome.heading2')}}</h3>
            <p>{{__("welcome.intro",["name"=>"Sharwan Kumawat"])}}</p>

            <div class="mt-4">
                <h4>About This Demo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel dignissim tellus. Morbi sit amet ex ut urna fermentum aliquam. Sed ac lorem non nulla consectetur gravida. Praesent non malesuada libero.</p>

                <h4>Services We Offer</h4>
                <p>Vestibulum sit amet justo sit amet erat aliquet laoreet. Nullam vehicula nunc sed purus fermentum tincidunt. Curabitur malesuada, sapien in laoreet congue, urna augue porta lorem, ac lacinia libero elit sed lacus.</p>

                <h4>Contact Us</h4>
                <p>Donec placerat nisi at enim viverra, in ultricies orci facilisis. Sed finibus, nibh sed tincidunt laoreet, nunc ex consequat velit, at tincidunt nisl erat nec augue.</p>
            </div>
        </main>
    </x-slot>
</x-layout>
