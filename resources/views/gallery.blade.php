<x-app-layout title="Gallery">
    <div class="container">
        <h1>Gallery</h1> <br>
        <div class="row">
            <div class="col">
                @foreach ($name as $key => $item)
                <x-card title={{$item}} image={{$key+1}}>

                </x-card>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>